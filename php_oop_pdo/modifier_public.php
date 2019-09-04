<?php
    class Handphone {
    // Pendeklarasian Public Variabel Dalam Class
        public $merek;
        public $warna = "Putih";
        public $harga = 9000000;

    // Pendeklarasian Public Method Dalam Class
        public function getMerek() {
            return $this->merek;
        }
        public function getWarna() {
            return $this->warna;
        }
        public function getHarga() {
            $total = $this->harga - 500000;
            return $total;
        }
    }

    // membuat objek
    $ObjectHandphone = new Handphone();

    // set variabel
    $ObjectHandphone->merek = "Nokia";
    // memanggil variabel
    echo "Merek Handphone : ". $ObjectHandphone->merek."<br>";
    // memanggil method dari class Handphone
    echo "Warna Handphone : " .$ObjectHandphone->getWarna()."<br>";
    echo "Harga  :Rp  " .$ObjectHandphone->getHarga()."<br>";

?>
