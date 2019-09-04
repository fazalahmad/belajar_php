<?php
    // Membuat class induk
    class Hewan {
    // Pendeklarasian Variabel Dalam Class
        protected $jumlahkaki;
        public $jenis;
        public $warna;

    // Pendeklarasian Method Dalam Class
        function setJumlahKaki($kaki){
          $this->jumlahkaki = $kaki;
        }
        public function getJumlahKaki() {
            return $this->jumlahkaki;
        }
        public function getJenis() {
            return "$this->jenis";
        }
        public function getWarna() {
            return $this->warna;
        }
    }

    // Membuat class anak (turunan) dari class induk
    class Kucing extends Hewan {
    // Pendeklarasian Method Dalam Class
        public function getDeskripsi() {
            $kaki = $this->getJumlahKaki() ;
            return "$this->jenis dengan warna ".$this->getWarna().
            " memiliki ".$this->getJumlahKaki(). " kaki";
        }
    }

    // membuat objek class Hewan dan Kucing

    $obj_kucing = new Kucing();

    // set variabel
    $obj_kucing->setJumlahKaki(4);
    $obj_kucing->jenis = "Persia";
    $obj_kucing->warna = "Putih";

    // memanggil method dari class kucing
    echo "Hewan : ".$obj_kucing->getDeskripsi();
?>
