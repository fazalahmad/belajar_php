<?php
    // Membuat Abstract class
    abstract class MakhlukHidup {
    // Pendeklarasian Variabel Dalam Class
        public $makan;

    // Pendeklarasian Method Abstarct Dalam Class
        abstract public function bernafas();
        abstract public function berjalan();

    // Pendeklarasian Method Normal Dalam Class
        public function makanan() {
            return $this->makan;
        }
    }

    // Membuat class anak
    class Manusia extends MakhlukHidup {
    // Pendeklarasian Method Abstract Dalam Class Turunan
        public function bernafas() {
            return "Manusia bernapas dengan Paru-Paru <br/>";
        }
    // Pendeklarasian Method Abstract Dalam Class Turunan
        public function berjalan() {
            return "Manusia berjalan Dengan 2 Kaki <br/>";
        }
    }

    //buat objek dari class di atas
    $orang = new Manusia();
    $orang->makan = "Makanan pokok manusia adalah Nasi <br/>";

    echo $orang->makanan();
    echo $orang->bernafas();
    echo $orang->berjalan();
?>
