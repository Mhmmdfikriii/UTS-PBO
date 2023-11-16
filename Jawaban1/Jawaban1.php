<?php
// Kelas Induk (Superclass)
class Kendaraan {
    public $merk;
    public $tahunProduksi;

    public function __construct($merk, $tahunProduksi) {
        $this->merk = $merk;
        $this->tahunProduksi = $tahunProduksi;
    }

    public function infoKendaraan() {
        return "Merk: {$this->merk}, Tahun Produksi: {$this->tahunProduksi}";
    }
}

// Kelas Turunan (Subclass)
class Mobil extends Kendaraan {
    public $jenis;

    public function __construct($merk, $tahunProduksi, $jenis) {
        // Memanggil konstruktor kelas induk
        parent::__construct($merk, $tahunProduksi);
        $this->jenis = $jenis;
    }

    public function infoMobil() {
        return "Jenis: {$this->jenis}, " . $this->infoKendaraan();
    }
}

// Membuat objek dari kelas turunan
$mobilSaya = new Mobil("Toyota", 2022, "Sedan");

// Mengakses metode dari kelas turunan
echo $mobilSaya->infoMobil();
?>

