<?php
require_once("VehicleInterface.php");
require_once("OnLaneAbstract.php");
require_once("Car.php");

$car=new Car('Mec','2024','JSADLFJ','DSJFKDSAJF');
echo '<pre>';


$car->setYom(2023);
print_r($car);
echo 'Yom-'.$car->getYom().PHP_EOL;

// $car->tangToc();
// $car->diChuyen();

