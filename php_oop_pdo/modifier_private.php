<?php
    class Handphone {
    // Pendeklarasian Protected Variabel Dalam Class
        private $harga = 9000000;

    // Pendeklarasian Public Method Dalam Class
        private function TotalHarga() {
            $diskon = 12/100;
            $total = $this->harga * $diskon;
            return "$total <br/>";
        }
        public function pembayaran(){
          return $this->TotalHarga();
        }
    }

    class Digital extends Handphone {
    // Pendeklarasian Public Method Dalam Class turunan
        public function getHarga() {
            return $this->harga;
        }
    }

    // membuat objek class Handphone
    $ObjectHandphone = new Handphone();
    $ObjectDigital = new Digital();
    // memanggil method dari class Handphone
    echo "Harga Diskon : Rp ".$ObjectHandphone->pembayaran();
    // memanggil method dari class Digital turunan
    echo "Harga Normal : Rp ".$ObjectHandphone->getHarga();
?>
