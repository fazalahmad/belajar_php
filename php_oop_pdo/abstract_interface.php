<?php
    //membuat abstract class
    abstract class kendaraan {
        //Pendeklarasian method abstract dalam class
        abstract public function berjalan();
    }
    //membuat interface class
    interface tujuan {
      //Pendeklarasian method interface dalam class
      public function kota();
    }

    //membuat class Turunan
    class mobil extends kendaraan implements tujuan {
      //Pendeklarasian method abstract dalam class Turunan
      public function berjalan(){
        return "Mobil menempu perjalanan 10 km";
      }

      //Pendeklarasian method interface dalam class Turunan
      public function kota(){
        return " untuk sampai ke kota bandung <br/><br/>";
      }
    }

    class kereta extends kendaraan implements tujuan {
        public function berjalan(){
            return "Kerata Api menempu perjalanan 70 km";
        }

        public function kota(){
            return " untuk sampai ke kota Yogyakarta <br/>";
        }
    }

    //buat objek dari class diatas
    $kendaraan_1 = new mobil;
    $kendaraan_2 = new kereta;

    //menjalankan method
    echo $kendaraan_1->berjalan();
    echo $kendaraan_1->kota();
    echo $kendaraan_2->berjalan();
    echo $kendaraan_2->kota();
?>
