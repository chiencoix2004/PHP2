<?php
class Television extends ElectronicDeviceAbstract {
    protected $screenSize;

    public function __construct($screenSize) {
        $this->screenSize = $screenSize;
    }

    public function getScreenSize() {
        return $this->screenSize;
    }

    public function getPowerUsage() {
        // Tính điện năng suử dụng của tivi
        return 100.0;
    }
}