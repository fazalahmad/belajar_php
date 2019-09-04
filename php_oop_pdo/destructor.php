<?php
    class Handphone {
    // Pendeklarasian Variabel Dalam Class
    public $merek = "Nokia 8";
    private $warna = "Gold";
    protected $harga = 9000000;

        // Pendeklarasian Method Normal Dalam Class
        public function tlp() {
          $info = "$this->merek dengan warna $this->warna <br/>";
          return $info;
        }
        public function sms() {
            // isi dari method sms
            return "Harga $this->merek adalah Rp $this->harga <br/>";
        }

        // Pendeklarasian Method Destructor Dalam Class
        public function __destruct(){
            echo "Ini berasal dari method destructor pada class Handphone ";
        }
    }

    // buat objek dari class handphone (intasisasi)
    $ObjectHandphone = new Handphone();

    echo $ObjectHandphone->tlp();
    echo $ObjectHandphone->sms();
?>
