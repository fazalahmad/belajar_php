<?php
    class handphone {
    // Pendeklarasian Variabel Dalam Class
        private $merek;
        private $warna;
        private $harga = 9000000;

    // Pendeklarasian Method Constructor Dalam Class
        public function __construct($merek_hp, $warna_hp){
            $this->merek = $merek_hp;
            $this->warna = $warna_hp;
        }

    // Pendeklarasian Method Normal Dalam Class
        public function tlp() {
            return "$this->merek dengan warna $this->warna <br/>";
        }

        public function sms() {
            // isi dari method sms
            return "Harga $this->merek adalah Rp $this->harga <br/>";
        }

        // Pendeklarasian Method Destructor Dalam Class
        public function __destruct(){
            echo "Ini berasal dari method destructor pada class handphone <br/><br/>";
        }
    }

    // buat objek dari class handphone (intasisasi)
    $objek_hanphone = new handphone("Samsung S8", "Gold");
    echo $objek_hanphone->tlp();
    echo $objek_hanphone->sms();


    $objek_hanphone = new handphone("Iphone 8", "Silver");
    echo $objek_hanphone->tlp();
    echo $objek_hanphone->sms();
?>
