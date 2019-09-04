<?php
    class Handphone {
    // Pendeklarasian Protected Variabel Dalam Class
        protected $harga = 9000000;
    // Pendeklarasian Public Method Dalam Class
        protected function Merek() {
          $merek = "Nokia";
            return $merek;
        }

    }

    class Digital extends Handphone {
    // Pendeklarasian Public Method Dalam Class turunan
        public function getHarga() {
            return $this->harga;
        }
        public function getMerek(){
          return $this->Merek();
        }
    }

    // membuat objek dari class turunan
    $ObjectHandphone = new Handphone();
    $ObjectDigital = new Digital();

    // memanggil nilai variabel protected dari class Handphone
    echo "Harga : Rp ".$ObjectDigital->getHarga()."<br>";
    // memanggil method protected dari class Handphone
    echo "Merek Handphone : ".$ObjectDigital->getMerek();
?>
