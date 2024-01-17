<?php
require_once("BillAbstract.php");
require_once("PhoneBillInterface.php");
require_once("ElectricityBillInterface.php");
require_once("WaterBillInterface.php");
require_once("ElectricityBill.php");
require_once("PhoneBill.php");
require_once("WaterBill.php");
echo '<pr>';
$electricityBill = new ElectricityBill("1234", "01/01/2022", 100);
$electricityBill->totalElectricityBill();
echo 'Mã Bill: '.$electricityBill->getBillNumber().'Ngày Thanh Toán: '.$electricityBill->getPaymentDate().'Tổng Bill: '.$electricityBill->totalElectricityBill().PHP_EOL;

$waterBill = new WaterBill("5678", "01/02/2022", 50);
$waterBill->totalWaterBill();
echo 'Mã Bill: '.$waterBill->getBillNumber().'Ngày Thanh Toán: '.$waterBill->getPaymentDate().'Tổng Bill: '.$waterBill->totalWaterBill().PHP_EOL;

$phoneBill = new PhoneBill("9101", "01/03/2022", 200);
$phoneBill->calculateTotalValue();
echo 'Mã Bill: '.$phoneBill->getBillNumber().'Ngày Thanh Toán: '.$phoneBill->getPaymentDate().'Tổng Bill: '.$phoneBill->calculateTotalValue().PHP_EOL;