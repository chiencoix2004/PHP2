<?php
abstract class OnLaneAbstract{
    public function __construct(
    protected string $brand, //Thương hiệu
    protected string $yom, //Năm sản xuất
    protected string $vin, //số khung
    protected string $ven, //số máy
    // protected string $ven, //số máy
    ){

    }
    abstract public function tangToc();

    // public function bamCoi(){
    //     echo 'Xe đang bấm còi'. __CLASS__;
    // }
    
   
}