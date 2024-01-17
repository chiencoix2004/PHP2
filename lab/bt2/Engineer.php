<?php

class Engineer extends EmployeeAbstract implements EngineerInterface {
    protected $Totalnumberofinventions;

    public function __construct( $name, $id, $luongCoban, $Totalnumberofinventions ) {
        parent::__construct( $name, $id, $luongCoban );
        $this->Totalnumberofinventions = $Totalnumberofinventions;
    }

    public function inventTotal() {
        return $this->Totalnumberofinventions;
    }

}