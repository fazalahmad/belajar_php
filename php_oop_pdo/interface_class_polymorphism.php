<?php
    // Membuat interface
    interface bangunruang {
    // Pendeklarasian method interface Dalam Class
        public function hitungLuas();
        public function hitungKeliling();
    }

    // Membuat class lingkaran
    class lingkaran implements bangunruang {
    // Pendeklarasian Variabel Dalam Class
        public $radius;
        public $phi = 3.14;

    // Pendeklarasian Method InterfaceDalamClass Turunan
        public function hitungLuas() {
            $luas = $this->phi * $this->radius * $this->radius;
            return "phi*radius*radius : $luas <br/>";
        }

        public function hitungKeliling() {
            return "2*phi*radius <br/>";
        }
    }

    // membuat objek
    $lingkaran = new lingkaran();
    // set variabel
    $lingkaran->radius = 5;
    // memanggil method dari class lingkaran
    echo $lingkaran-> hitungLuas();
    echo $lingkaran-> hitungKeliling();
?>
