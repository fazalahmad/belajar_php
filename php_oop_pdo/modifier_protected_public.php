<?php
    class Handphone {
    // Pendeklarasian Protected Variabel Dalam Class
        protected $harga = 9000000;

    // Pendeklarasian Public Method Dalam Class
        public function getHarga() {
            return $this->harga;
        }

        protected function info(){
          $ket = "Handphone ini keluaran Tahun 2017";
          return $ket;
        }

        public function Informasi(){
          return $this->info();
        }
    }

    // membuat objek class Handphone
    $ObjectHandphone = new Handphone();

    //memanggil nilai variabel dari class Handphone
    echo "Harga Handphone : Rp ".$ObjectHandphone->getHarga();
    // memanggil method dari class Handphone
    echo "<br/>Informasi  : ".$ObjectHandphone->informasi();
?>
