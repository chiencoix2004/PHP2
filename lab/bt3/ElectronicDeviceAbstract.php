<?php
abstract class ElectronicDeviceAbstract implements ElectronicDeviceInterface {
    protected $isTurnedOn;

    public function turnOn() {
        $this->isTurnedOn = true;
        echo "Device is turned on" . PHP_EOL;
    }

    public function turnOff() {
        $this->isTurnedOn = false;
        echo "Device is turned off" . PHP_EOL;
    }

    public function isTurnedOn() {
        return $this->isTurnedOn ;
    }
}