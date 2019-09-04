<?php
    class Handphone {
    // Pendeklarasian Variabel Dalam Class
        private $merek = "Nokia 8";
        private $warna = "Gold";
        private $harga = 9000000;

    // Pendeklarasian Method Constructor Dalam Class
        public function __construct(){
            echo "Ini berasal dari Constructor pada class Handphone <br/>";
        }

    // Pendeklarasian Method Normal Dalam Class
        public function tlp() {
            $info = "$this->merek dengan warna $this->warna <br/>";
            echo $info;
            return $info;
        }

        public function sms() {
            // isi dari method sms
            return "Harga $this->merek adalah Rp $this->harga";
        }
    }

    // buat objek dari class handphone (intasisasi)
    $ObjectHandphone = new Handphone();
    $ObjectHandphone->tlp();
    echo $ObjectHandphone->sms();
?>
