<?php
// Lớp cha PhuongTienGiaoThong
class PhuongTienGiaoThong {
    protected $ten;
    protected $ma;
    protected $namSanXuat;
    public function __construct($ten, $ma, $namSanXuat) {
        $this->ten = $ten;
        $this->ma = $ma;
        $this->namSanXuat = $namSanXuat;
    }

    public function getTen() {
        return $this->ten;
    }

    public function setTen($ten) {
        $this->ten = $ten;
    }

    public function getMa() {
        return $this->ma;
    }

    public function setMa($ma) {
        $this->ma = $ma;
    }

    public function getNamSanXuat() {
        return $this->namSanXuat;
    }

    public function setNamSanXuat($namSanXuat) {
        $this->namSanXuat = $namSanXuat;
    }

    public function diChuyen($diemA, $diemB) {
        echo "Phuong tien {$this->ten} di chuyen tu {$diemA} den {$diemB}.";
    }
}

// Lớp con Oto
class Oto extends PhuongTienGiaoThong {
    private $soChoNgoi;
    private $congSuatDongCo;

    public function __construct($ten, $ma, $namSanXuat, $soChoNgoi, $congSuatDongCo) {
        parent::__construct($ten, $ma, $namSanXuat);
        $this->soChoNgoi = $soChoNgoi;
        $this->congSuatDongCo = $congSuatDongCo;
    }

    public function getSoChoNgoi() {
        return $this->soChoNgoi;
    }

    public function setSoChoNgoi($soChoNgoi) {
        $this->soChoNgoi = $soChoNgoi;
    }

    public function getCongSuatDongCo() {
        return $this->congSuatDongCo;
    }

    public function setCongSuatDongCo($congSuatDongCo) {
        $this->congSuatDongCo = $congSuatDongCo;
    }

    public function gapCongTren() {
        echo "Oto {$this->ten} gập cổng trên.";
    }
}

// Lớp con XeMay
class XeMay extends PhuongTienGiaoThong {
    private $congSuatDongCo;

    public function __construct($ten, $ma, $namSanXuat, $congSuatDongCo) {
        parent::__construct($ten, $ma, $namSanXuat);
        $this->congSuatDongCo = $congSuatDongCo;
    }

    public function getCongSuatDongCo() {
        return $this->congSuatDongCo;
    }

    public function setCongSuatDongCo($congSuatDongCo) {
        $this->congSuatDongCo = $congSuatDongCo;
    }

    public function batDenPha() {
        echo "Xe may {$this->ten} bật đèn pha.";
    }
}

// Lớp con XeBuyt
class XeBuyt extends PhuongTienGiaoThong {
    private $soChoNgoi;
    private $soTang;

    public function __construct($ten, $ma, $namSanXuat, $soChoNgoi, $soTang) {
        parent::__construct($ten, $ma, $namSanXuat);
        $this->soChoNgoi = $soChoNgoi;
        $this->soTang = $soTang;
    }

    public function getSoChoNgoi() {
        return $this->soChoNgoi;
    }

    public function setSoChoNgoi($soChoNgoi) {
        $this->soChoNgoi = $soChoNgoi;
    }

    public function getSoTang() {
        return $this->soTang;
    }

    public function setSoTang($soTang) {
        $this->soTang = $soTang;
    }

    public function batDieuHoa() {
        echo "Xe buyt {$this->ten} bật điều hòa.";
    }
}

// Sử dụng các lớp trên
echo '<pre>';
$oto = new Oto("Toyota", "OTO123", 2021, 5, "300HP");
$oto->diChuyen("Ha Noi", "Ho Chi Minh");
$oto->gapCongTren();
echo '<pre>';
$xeMay = new XeMay("Honda", "XM456", 2020, "150CC");
$xeMay->diChuyen("Da Nang", "Hoi An");
$xeMay->batDenPha();
echo '<pre>';
$xeBuyt = new XeBuyt("Sai Gon", "XB789", 2019, 40, 2);
$xeBuyt->diChuyen("Can Tho", "Vung Tau");
$xeBuyt->batDieuHoa();