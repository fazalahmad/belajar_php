<?php
    // Membuat class induk
    class hewan {
    // Pendeklarasian Variabel Dalam Class
        public $jumlahkaki;
        public $jenis;
        public $warna;

    // Pendeklarasian Method Dalam Class
        public function getJumlahKaki() {
            return $this->jumlahkaki;
        }
        public function getJenis() {
            return $this->jenis;
        }
        public function getWarna() {
            return $this->warna;
        }
    }

    // Membuat class anak (turunan) dari class induk
    class kucing extends hewan {
    // Pendeklarasian Method Dalam Class
        public function getDeskripsi() {
            return "jumlahkaki : $this->jumlahkaki <br/>
            jenis : $this->jenis<br/> Warna : $this->warna ";
        }
    }

    // membuat objek
    $kucing = new kucing();
    // set variabel
    $kucing->jumlahkaki = 4;
    $kucing->jenis = "Persia";
    $kucing->warna = "Putih";

    // memanggil method dari class kucing
    echo $kucing->getDeskripsi();
?>
