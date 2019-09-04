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

    // Pendeklarasian Method Getter Dalam Class
        public function getMerek() {
            return $this->merek."<br/>";
        }
        public function getWarna_Harga() {
            return "Warna $this->warna dengan harga Rp $this->harga";
        }

    }

    //buat objek dari class Handphone (intasisasi)
    $ObjectHandphone = new Handphone();
    //set sebuah nilai didalam method setter
    $ObjectHandphone->setMerek("Nokia");
    $ObjectHandphone->setWarna_Harga("Putih",9000000);

    // memanggil method dari class kucing
    echo "Merek Handphone : ".$ObjectHandphone->getMerek();
    echo $ObjectHandphone->getWarna_Harga();
?>
