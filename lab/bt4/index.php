<?php
//chức năng của hóa đơn 
interface BillFunctionality {
    //tính tổng giá trị 
    public function calculateTotalValue();
    //hiển thị thông tin của bill 
    public function displayBillInfo();
}

// Abstract class Bill
abstract class Bill implements BillFunctionality {
    protected $billNumber;
    protected $paymentDate;
    protected $totalValue;

    public function __construct($billNumber, $paymentDate, $totalValue) {
        $this->billNumber = $billNumber;
        $this->paymentDate = $paymentDate;
        $this->totalValue = $totalValue;
    }

    public abstract function calculateTotalValue();

    public function displayBillInfo() {
        echo "Bill Number: " . $this->billNumber . PHP_EOL;
        echo "Payment Date: " . $this->paymentDate . PHP_EOL;
        echo "Total Value: " . $this->totalValue . PHP_EOL;
    }
}

// Class ElectricityBill
class ElectricityBill extends Bill {
    private $electricityUsage;

    public function __construct($billNumber, $paymentDate, $electricityUsage) {
        parent::__construct($billNumber, $paymentDate, 0);
        $this->electricityUsage = $electricityUsage;
    }

    public function calculateTotalValue() {
        // Tính tổng giá trị hóa đơn tiền điện dựa trên mức sử dụng điện
        $this->totalValue = $this->electricityUsage * 0.2;
    }
}

// Class WaterBill
class WaterBill extends Bill {
    private $waterUsage;

    public function __construct($billNumber, $paymentDate, $waterUsage) {
        parent::__construct($billNumber, $paymentDate, 0);
        $this->waterUsage = $waterUsage;
    }

    public function calculateTotalValue() {
        // Tính tổng giá trị hóa đơn tiền nước dựa trên lượng nước sử dụng
        $this->totalValue = $this->waterUsage * 0.1;
    }
}

// Class PhoneBill
class PhoneBill extends Bill {
    private $numberOfCalls;

    public function __construct($billNumber, $paymentDate, $numberOfCalls) {
        parent::__construct($billNumber, $paymentDate, 0);
        $this->numberOfCalls = $numberOfCalls;
    }

    public function calculateTotalValue() {
        // Tính tổng giá trị hóa đơn điện thoại dựa trên số lượng cuộc gọi
        $this->totalValue = $this->numberOfCalls * 0.05;
    }
}


$electricityBill = new ElectricityBill("1234", "01/01/2022", 100);
$electricityBill->calculateTotalValue();
$electricityBill->displayBillInfo();

$waterBill = new WaterBill("5678", "01/02/2022", 50);
$waterBill->calculateTotalValue();
$waterBill->displayBillInfo();

$phoneBill = new PhoneBill("9101", "01/03/2022", 200);
$phoneBill->calculateTotalValue();
$phoneBill->displayBillInfo();