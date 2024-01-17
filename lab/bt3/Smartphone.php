<?php
class Smartphone extends ElectronicDeviceAbstract {
    protected $batteryLevel;

    public function __construct($batteryLevel) {
        $this->batteryLevel = $batteryLevel;
    }

    public function getBatteryLevel() {
        return $this->batteryLevel;
    }

    public function getPowerUsage() {
        // Tính điện năng suử dụng của smartphone
        return 20.0;
    }
}