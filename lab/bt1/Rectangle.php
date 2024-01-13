<?php
class Rectangle extends AbstractShape implements ShapeInterface{
    protected $width;
    protected $height;
    public function __construct($name,$width,$height){
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    //Tính diện tích hình chữ nhật
    public function calculateArea(){
        return $this->width*$this->height;
    }
    //Tính chu vi hình chữ nhật
    public function calculatePerimeter(){
        return ($this->width +$this->height)*2;
    }
}