<?php
    // Membuat class induk
    class Hewan {

    // Pendeklarasian Method Dalam Class Hewan
        public function jalan() {
            return "Hewan ini berjalan<br/>";
        }
    }

    // Membuat class anak (turunan) dari class induk
    class Burung extends hewan {
    // Pendeklarasian Overriding Method Dalam Class Burung
        public function jalan() {
            echo "method jalan() berisi : Hewan ini terbang";
        }
    }
    $binatang_1 = new Hewan ();
    $binatang = new Burung();
    echo "method jalan() berisi : ".$binatang_1->jalan();
    $binatang->jalan();
?>
