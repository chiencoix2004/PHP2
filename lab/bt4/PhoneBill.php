<?php
class PhoneBill extends BillAbstract implements PhoneBillInterface {
    private $numberOfCalls;

    public function __construct($billNumber, $paymentDate, $numberOfCalls) {
        parent::__construct($billNumber, $paymentDate);
        $this->numberOfCalls = $numberOfCalls;
    }

    public function calculateTotalValue() {
        // Tính tổng giá trị hóa đơn điện thoại dựa trên số lượng cuộc gọi
        return  $this->numberOfCalls * 0.05;
    }
}