<?php
interface ElectronicDevice {
    public function turnOn();
    public function turnOff();
    public function getPowerUsage();
}


abstract class AbstractElectronicDevice implements ElectronicDevice {
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
        return $this->isTurnedOn;
    }
}

// Class Television
class Television extends AbstractElectronicDevice {
    private $screenSize;

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

// Class Laptop
class Laptop extends AbstractElectronicDevice {
    private $batteryLevel;

    public function __construct($batteryLevel) {
        $this->batteryLevel = $batteryLevel;
    }

    public function getBatteryLevel() {
        return $this->batteryLevel;
    }

    public function getPowerUsage() {
        //Tính điện năng suử dụng của laptop
        return 50.0;
    }
}

// Class Smartphone
class Smartphone extends AbstractElectronicDevice {
    private $batteryLevel;

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
echo '<pre>';
//in ra màn hình 
$television = new Television(55);
$television->turnOn();
echo $television->getScreenSize() . PHP_EOL;
$television->turnOff();

$laptop = new Laptop(80);
$laptop->turnOn();
echo $laptop->getBatteryLevel() . PHP_EOL;
$laptop->turnOff();

$smartphone = new Smartphone(70);
$smartphone->turnOn();
echo $smartphone->getBatteryLevel() . PHP_EOL;
$smartphone->turnOff();