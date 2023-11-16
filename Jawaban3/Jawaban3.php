<?php
// Kelas Induk (Superclass)
class Kendaraan {
    public function info() {
        return "Ini adalah kendaraan.";
    }
}

// Kelas Turunan Pertama (Subclass)
class Mobil extends Kendaraan {
    public function info() {
        return "Ini adalah mobil.";
    }
}


// Fungsi yang menerima objek Kendaraan sebagai parameter
function tampilkanInfo(Kendaraan $kendaraan) {
    return $kendaraan->info();
}

// Membuat objek dari kelas turunan
$mobilSaya = new Mobil();

// Memanggil fungsi dengan objek dari kelas turunan
echo tampilkanInfo($mobilSaya);