<?php
require_once ( 'ShapeInterface.php' );
require_once ( 'ShapeAbstract.php' );
require_once ( 'Circle.php' );
require_once ( 'Rectangle.php' );
require_once ( 'Triangle.php' );
echo '<pre>';

$circle = new Circle( 'Hình tròn', 5 );
print_r(  $circle->getName() . ' Diện Tích: ' . ceil( $circle->calculateArea() ) . ', Chu Vi: ' . ceil( $circle->calculatePerimeter() ) . '\n');

$rectangle = new Rectangle( 'Hình Chữ Nhật', 5, 10 );
print_r(  $rectangle->getName() . ' Diện Tích: ' . $rectangle->calculateArea() . ', Chu Vi: ' . $rectangle->calculatePerimeter() . '\n');

$triangle = new Triangle( 'Hình Tam Giác', 3, 4, 5 );
print_r( $triangle->getName() . ' Diện Tích: ' . $triangle->calculateArea() . ', Chu Vi: ' . $triangle->calculatePerimeter());