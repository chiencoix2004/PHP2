<?php

class Circle extends ShapeAbstract implements ShapeInterface {
    protected $radius;

    public function __construct( $name, $radius ) {
        parent::__construct( $name );
        $this->radius = $radius;
    }
    //Tính diện tích hình tròn

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
    //Tính chu vi hình tròn

    public function calculatePerimeter() {
        return pi() * $this->radius * 2;
    }
}