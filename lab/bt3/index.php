<?php
require_once('ElectronicDeviceInterface.php');
require_once('ElectronicDeviceAbstract.php');
require_once('Television.php');
require_once('Laptop.php');
require_once('Smartphone.php');

echo '<pre>';
//in ra màn hình 
$television = new Television(55);
$television->turnOn();
$television->turnOff();
echo 'Size Màn Hình Tive:'.$television->getScreenSize() . PHP_EOL;

echo '<br>';
$laptop = new Laptop(80);
$laptop->turnOn();
$laptop->turnOff();
echo 'Pin Của Laptop:'.$laptop->getBatteryLevel() . PHP_EOL;


echo '<br>';

$smartphone = new Smartphone(70);
$smartphone->turnOn();
$smartphone->turnOff();
echo 'Pin Của Smartphone:'.$smartphone->getBatteryLevel() . PHP_EOL;
