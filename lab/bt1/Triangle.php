<?php

class Triangle extends ShapeAbstract implements  ShapeInterface {
    protected $canh1;
    protected $canh2;
    protected $canh3;

    public function __construct( $name, $canh1, $canh2, $canh3 ) {
        parent::__construct( $name );
        $this->canh1 = $canh1;
        $this->canh2 = $canh2;
        $this->canh3 = $canh3;
    }
    //Tính diện tích hình tam giác theo công thức heron

    public function calculateArea() {
        //Tính nửa chu vi tam giác
        $p = ( $this->canh1+$this->canh2+$this->canh3 )/2;
        //Tính diện tích hình tam giác
        return sqrt( $p*( $p-$this->canh1 )*( $p-$this->canh2 )*( $p-$this->canh3 ) );
    }

    //Tính chu vi hình tam giác

    public function calculatePerimeter() {
        return $this->canh1+$this->canh2+$this->canh3;
    }

}