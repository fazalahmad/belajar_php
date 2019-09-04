<?php

    class Handphone {
    // Pendeklarasian static variabel Dalam Class
        public static $merek;
        public static $warna;
        public static $harga;
    // Pendeklarasian static method Dalam Class
        public static function tampilMerek() {
            return self::$merek."<br>";
        }
        public static function tampilWarna() {
            return self::$warna."<br>";
        }
        public static function tampilHarga() {
            return self::$harga;
        }
    }

    // set static variablel
    Handphone::$merek="Nokia";
    Handphone::$warna="Putih";
    Handphone::$harga=9000000;


    // memanggil static method
    echo "Merek Handphone : ".Handphone::tampilMerek();
    echo "Warna Handphone : ".Handphone::tampilWarna();
    echo "Harga Handphone : ".Handphone::tampilHarga();
?>
