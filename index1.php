<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FiguresCalculator.0.0.1</title>
        <link rel="stylesheet" type="text/css" href="index.css">>
    </head>
    <body>
        <h1>Figures Calculator</h1>
        <p1>Circle</p1>
        <img src="Circle.png" alt="circle_img" width="220" height="230">
        <img src="arittri.gif" alt="triangle-img" width="220" height="230" class="triangle">
        <form action="index1.php" method="post">
            <label>Enter a value for radius: </label><br>
            <input type="text" name="radius"><br>
            <input type="submit" value="Calculate"><br>
        </form>
        <form class="one" action="index1.php" method="post">
            <label>Enter a for "a": </label><br>
            <input type="text" name="a"><br>

            <label>Enter a for "b": </label><br>
            <input type="text" name="b"><br>

            <label>Enter a for "c": </label><br>
            <input type="text" name="c"><br>

            <label>Enter a value for "ha":</label><br>
            <input type="text" name="ha"><br>
            <input type="submit" value="Calculate"><br>

        </form>
        <img src="triangle_formulas.png" alt="formulas" width="320" height="270" class="formulas"/>
        <img src="circle_formulas.jpg" alt="circle_formulas" width="320" height="270" class="circle_formulas"/>
        <a href="https://www.hitbullseye.com/Circle-Formula.php"><img src="circle_formulas.jpg" alt="circle_formulas" width="320"
         height="270" class="circle_formulas"/></a>
         <a href="https://www.hitbullseye.com/Triangle-Formula.php"><img src="triangle_formulas.png" alt="formulas" 
         width="320" height="270" class="formulas"/></a>
    </body>
</html>
<?php
       $radius = $_POST["radius"];
       $diameter = null;
       $circumference = null;
       $area = null;
   
       $diameter = 2 * $radius;
       $circumference = 2 * pi() * $radius;
       $area = pi() * pow($radius, 2);
   
       $diameter = round($diameter, 2);
       $circumference = round($circumference, 2);
       $area = round ($area, 2);
   
   
       echo"...Results...<br>";
       echo"Diameter of a Circle is {$diameter}cm<br>";
       echo"Circumference of a Circle is {$circumference}cm<br>";
       echo"Area of a Circle is {$area}cm^2<br>" ;

       $a = $_POST["a"];
       $ha = $_POST["ha"];
       $b = $_POST["b"];
       $c = $_POST["c"];

       $circumference_triangle = null;
       $area_triangle = null;

       $circumference_triangle = $a + $b + $c;
       $circumference_triangle = round($circumference_triangle, 2);

       $area_triangle = ($a * $ha) / 2;
       $area_triangle = round($area_triangle, 2);
       echo "<br>";
       echo"<p>...Results...<br>Circumference of athe triangle is {$circumference_triangle}cm<br>Area of
        the triangle is {$area_triangle}cm^2</p><br>";

       
?>