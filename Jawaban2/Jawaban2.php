<?php
class Mobil {
    private $merk;

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }
}

// Penggunaan kelas dengan encapsulation
$mobilSaya = new Mobil();
$mobilSaya->setMerk("Toyota");

echo "Merk Mobil: " . $mobilSaya->getMerk();
?>
