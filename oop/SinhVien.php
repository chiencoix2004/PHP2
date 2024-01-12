<?php

class SinhVien //PascalCase
 {
    public function toString() {
        return $this->id.''
        .$this->code.''
        .$this->name.''
        .$this->dob->format( 'd-m-Y' );
    }

    public function __construct(
        public int $id,
        public string $code,
        public string $name,
        public Datetime $dob){}

    }
    echo '<pre>';
    $sinhVien1 = new SinhVien( 1, 'PH38032', 'Nguyễn Văn B', new Datetime( '2004-06-26' ) );
    $sinhVien1->id = 1;
    $sinhVien1->code = 'PH38032';
    $sinhVien1->name = 'Nguyễn Văn B';
    $sinhVien1->dob = new Datetime( '2004-06-26' );
    print_r( $sinhVien1 );