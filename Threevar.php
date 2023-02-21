<!DOCTYPE html>
<html>
    <head>
        <title>Three variable</title>
        <link rel="stylesheet" href="Threevar_style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1>Equations are of the form a1x+b1y+c1z=d1 and a2x+b2y+c2z=d2</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2>Enter the values of coefficients</h2>
                    <form action="Threevar.php" method="post">
                        <label for="a1">a1=</label>
                        <input type="text" name="a1"/><br><br>
                        <label for="b1">b1=</label>
                        <input type="text" name="b1"/><br><br>
                        <label for="c1">c1=</label>
                        <input type="text" name="c1"/><br><br>
                        <label for="d1">d1=</label>
                        <input type="text" name="d1"/><br><br>
                        <label for="a2">a2=</label>
                        <input type="text" name="a2"/><br><br>
                        <label for="b2">b2=</label>
                        <input type="text" name="b2"/><br><br>
                        <label for="c2">c2=</label>
                        <input type="text" name="c2"/><br><br>
                        <label for="d2">d2=</label>
                        <input type="text" name="d2"/><br><br>
                        <label for="a3">a3=</label>
                        <input type="text" name="a3"/><br><br>
                        <label for="b3">b3=</label>
                        <input type="text" name="b3"/><br><br>
                        <label for="c3">c3=</label>
                        <input type="text" name="c3"/><br><br>
                        <label for="d3">d3=</label>
                        <input type="text" name="d3"/><br><br>
                        <input type="submit">
                        </form>       
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <?php
                        $a1=$_POST["a1"];
                        $b1=$_POST["b1"];
                        $c1=$_POST["c1"];
                        $d1=$_POST["d1"];
                        $a2=$_POST["a2"];
                        $b2=$_POST["b2"];
                        $c2=$_POST["c2"];
                        $d2=$_POST["d2"];
                        $a3=$_POST["a3"];
                        $b3=$_POST["b3"];
                        $c3=$_POST["c3"];
                        $d3=$_POST["d3"];
                        if (((($a1/$a2)!=($b1/$b2))||(($a1/$a2)!=($c1/$c2)))&((($a2/$a3)!=($b2/$b3))||(($a2/$a3)!=($c2/$c3))))
                        {
                            $z=(((($a2*$d1)-($a1*$d2))*(($b2*$a3)-($a2*$b3)))-((($a3*$d2)-($a2*$d3))*(($b1*$a2)-($a1*$b2))))/(((($c1*$a2)-($a1*$c2))*(($b2*$a3)-($a2*$b3)))-((($c2*$a3)-($a2*$c3))*(($b1*$a2)-($a1*$b2))));
                            $y=((($a2*$d1)-($a1*$d2))-(($c1*$a2)-($a1*$c2))*$z)/(($b1*$a2)-($a1*$b2));
		                    $y=((($a3*$d2)-($a2*$d3))-(($c2*$a3)-($a2*$c3))*$z)/(($b2*$a3)-($a2*$b3));
                            $x=($d1-($c1*$z)-($b1*$y))/$a1;
		                    $x=($d2-($c2*$z)-($b2*$y))/$a2;
		                    $x=($d3-($c3*$z)-($b3*$y))/$a3;
                            echo "x= ".$x. "</br>";
                            echo "y= ".$y. "</br>";
                            echo "z= ".$z;
                        }
                        elseif(((($a1/$a2)==($b1/$b2))&(($a1/$a2)==($c1/$c2)))^((($a2/$a3)==($b2/$b3))&(($a2/$a3)==($c2/$c3))))
                        {
                            echo "There are infinitely many solutions";
                        }
                        else
                        {
                            echo "There are no solutions";
                        }
                    ?>  
                </div>
            </div>
        </div>
    </body>
</html>
