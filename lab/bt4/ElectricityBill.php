<?php
class ElectricityBill extends BillAbstract implements ElectricityBillInterface {
    private $electricityUsage;

    public function __construct($billNumber, $paymentDate, $electricityUsage) {
        parent::__construct($billNumber, $paymentDate);
        $this->electricityUsage = $electricityUsage;
    }
    
    public function totalElectricityBill() {
        // Tính tổng giá trị hóa đơn tiền điện dựa trên mức sử dụng điện
        return $this->electricityUsage * 0.2;
    }
}