<?php
class Car extends OnLaneAbstract implements VehicleInterface{
    public function setYom($yomNew){
        $this->yom = $yomNew;
    }
    public function getYom(){
        return $this->yom;
    }


    public function diChuyen(){
        echo __CLASS__.'di chuyển trước sau,quay đầu được'.PHP_EOL;

    }
    public function tangToc(){
        echo __CLASS__.'tăng tốc từ 0->100 trong 3s'.PHP_EOL;

    }
}