<!DOCTYPE html>
<html>
    <head>
        <title>Two variable</title>
        <link rel="stylesheet" href="Twovar_style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1>Equation is of the form a1x+b1y=c1 and a2x+b2y=c2</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2>Enter the values of coefficients</h2>
                    <form method="post">
                        <label for="a1">a1=</label>
                        <input type="text" name="a1"/><br><br>
                        <label for="b1">b1=</label>
                        <input type="text" name="b1"/><br><br>
                        <label for="c1">c1=</label>
                        <input type="text" name="c1"/><br><br>
                        <label for="a2">a2=</label>
                        <input type="text" name="a2"/><br><br>
                        <label for="b2">b2=</label>
                        <input type="text" name="b2"/><br><br>
                        <label for="c2">c2=</label>
                        <input type="text" name="c2"/><br><br>
                        <input type="submit"><br><br>
                        </form>       
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <?php
                        $a1=$_POST["a1"];
                        $b1=$_POST["b1"];
                        $c1=$_POST["c1"];
                        $a2=$_POST["a2"];
                        $b2=$_POST["b2"];
                        $c2=$_POST["c2"];
                        if(($a1/$a2)!=($b1/$b2))
                        {
                            $y=(($c1*$a2)-($c2*$a1))/(($b1*$a2)-($b2*$a1));
                            $x=($c1-($b1*$y))/$a1;
                            echo "x= ".$x. "</br>";
                            echo "y= ".$y;
                        }
                        elseif((($a1/$a2)==($b1/$b2))&(($a1/$a2)==($c1/$c2)))
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
