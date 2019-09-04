<?php
    class Handphone {
    // Pendeklarasian Variabel Dalam Class
        private $merek;
        private $warna;
        private $harga;

    // Pendeklarasian Method Setter Dalam Class
    // $a , $b ,dan $c sebagai parameter untuk method-method tersebut
        public function setMerek($a) {
            $this->merek = $a;
        }
        public function setWarna_Harga($b, $c) {
            $this->warna = $b;
            $this->harga = $c;
        }
    }

    //buat objek dari class handphone (intasisasi)
    $ObjectHandphone = new Handphone();
    //set sebuah nilai didalam method setter
    $ObjectHandphone->setMerek("Nokia");
    $ObjectHandphone->setWarna("Putih", 9000000);
?>
