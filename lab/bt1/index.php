<?php
interface Shape {
    public function calculateArea();
    public function calculatePerimeter();
}

abstract class AbstractShape implements Shape {
    protected $name;
  
    public function __construct($name) {
        $this->name = $name;
    }
  
    public function getName() {
        return $this->name;
    }
}

class Circle extends Shape implements AbstractShape {
    private $radius;
  
    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }
  
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
  
    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle extends AbstractShape {
    private $width;
    private $height;
  
    public function __construct($name, $width, $height) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
  
    public function calculateArea() {
        return $this->width * $this->height;
    }
  
    public function calculatePerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Triangle extends AbstractShape {
    private $side1;
    private $side2;
    private $side3;
  
    public function __construct($name, $side1, $side2, $side3) {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
  
    public function calculateArea() {
        // Tính diện tích tam giác theo công thức Heron
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
    }
  
    public function calculatePerimeter() {
        return $this->side1 + $this->side2 + $this->side3;
    }
}

$circle = new Circle('Circle', 5);
echo $circle->getName() . " area: " . $circle->calculateArea() . ", perimeter: " . $circle->calculatePerimeter() . "\n";

$rectangle = new Rectangle('Rectangle', 5, 10);
echo $rectangle->getName() . " area: " . $rectangle->calculateArea() . ", perimeter: " . $rectangle->calculatePerimeter() . "\n";

$triangle = new Triangle('Triangle', 3, 4, 5);
echo $triangle->getName() . " area: " . $triangle->calculateArea() . ", perimeter: " . $triangle->calculatePerimeter() . "\n";