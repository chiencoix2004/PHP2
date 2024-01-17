<?php

class Manager extends EmployeeAbstract implements ManagerInterface {
    protected $Totalnumberofmanagers;

    public function __construct( $name, $id, $luongCoban, $Totalnumberofmanagers ) {
        parent::__construct( $name, $id, $luongCoban );
        $this->Totalnumberofmanagers = $Totalnumberofmanagers;
    }

    public function manageAble() {
        return $this->Totalnumberofmanagers;
    }
}