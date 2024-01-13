<?php
require_once ("ShapeInterface.php");
require_once ("AbstractShape.php");
require_once ("Circle.php");
require_once ("Rectangle.php");
require_once ("Triangle.php");
echo "<pre>";

$circle = new Circle('Hình tròn', 5);
echo $circle->getName() . " Diện Tích: " . ceil($circle->calculateArea()) . ", Chu Vi: " . ceil($circle->calculatePerimeter()) . "\n";

$rectangle = new Rectangle('Diện Tích', 5, 10);
echo $rectangle->getName() . " area: " . $rectangle->calculateArea() . ", Chu Vi: " . $rectangle->calculatePerimeter() . "\n";

$triangle = new Triangle('Diện Tích', 3, 4, 5);
echo $triangle->getName() . " area: " . $triangle->calculateArea() . ", Chu Vi: " . $triangle->calculatePerimeter() . "\n";