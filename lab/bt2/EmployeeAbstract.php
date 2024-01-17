<?php
abstract class EmployeeAbstract {
    protected $name;
    protected $id;
    protected $luongCoban;

    public function __construct( $name, $id, $luongCoban ) {
        $this->name = $name;
        $this->id = $id;
        $this->luongCoban = $luongCoban;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function getLuongcoban() {
        return $this->luongCoban;
    }
}