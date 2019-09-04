<?php
    class Handphone {
    // Pendeklarasian Protected Variabel Dalam Class
        protected $harga = 9000000;

    // Pendeklarasian Public Method Dalam Class
        protected function getHarga() {
            return $this->harga;
        }
    }

    // membuat objek class Handphone
    $ObjectHandphone = new Handphone();

    //memanggil variabel dari class Handphone
    echo $ObjectHandphone->harga;
    // memanggil method dari class Handphone
    echo "Harga Handphone : ".$ObjectHandphone->getharga();
?>
