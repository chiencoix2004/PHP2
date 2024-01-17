<?php
abstract class BillAbstract  {
    protected $billNumber;
    protected $paymentDate;

    public function __construct($billNumber, $paymentDate) {
        $this->billNumber = $billNumber;
        $this->paymentDate = $paymentDate;
    }
    public function getBillNumber() {
        return $this->billNumber;
    }
    public function getPaymentDate() {
        return $this->paymentDate;
    }
}