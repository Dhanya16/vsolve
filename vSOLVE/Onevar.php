<!DOCTYPE html>
<html>
    <head>
        <title>One variable</title>
        <link rel="stylesheet" href="Onevar_style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1>Equation is of the form ax+b=0</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2>Enter the values for a and b</h2>
                    <form method="post">
                        <label for="a">a=</label>
                        <input type="text" name="a"/><br><br>
                        <label for="b">b=</label>
                        <input type="text" name="b"/><br><br>
                        <input type="submit"><br><br>
                        </form>       
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <?php
                        $a=$_POST["a"];
                        $b=$_POST["b"];
                        $x=(-$b)/$a;
                        echo "x= ".$x;
                    ?>  
                </div>
            </div>
        </div>
    </body>
</html>
