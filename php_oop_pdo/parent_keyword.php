<?php

    class Handphone {
    // Pendeklarasian static variabel Dalam Class
        public static $merek;
        public static $warna;

    // Pendeklarasian static method Dalam Class
        public static function tampilMerek() {
            return self::$merek;
        }
        public static function tampilWarna() {
            return self::$warna;
        }
        protected static function tampilHarga() {
            return "Rp 9000000";
        }

    }

    class Digital extends Handphone {
      public static function info(){
        echo parent::tampilMerek()."<br/>";
        echo parent::tampilWarna()."<br/>";
        echo parent::tampilHarga()."<br/>";
      }
    }

    // set static variablel class induk
    Handphone::$merek="Nokia";
    Handphone::$warna="Putih";

    // memanggil static method class anak
    Digital::info();

?>
