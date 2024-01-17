<?php

class Salespreson extends EmployeeAbstract implements SalespresonInterface {
    protected $Totalnumberofproducts;

    public function __construct( $name, $id, $luongCoban, $Totalnumberofproducts ) {
        parent::__construct( $name, $id, $luongCoban );
        $this->Totalnumberofproducts = $Totalnumberofproducts;
    }

    public function productTotal() {
        return $this->Totalnumberofproducts;
    }

}