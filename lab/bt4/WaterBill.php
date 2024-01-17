<?php
class WaterBill extends BillAbstract implements WaterBillInterface  {
    private $waterUsage;

    public function __construct($billNumber, $paymentDate, $waterUsage) {
        parent::__construct($billNumber, $paymentDate);
        $this->waterUsage = $waterUsage;
    }

    public function  totalWaterBill() {
        // Tính tổng giá trị hóa đơn tiền nước dựa trên lượng nước sử dụng
        return  $this->waterUsage * 0.1;
    }
}