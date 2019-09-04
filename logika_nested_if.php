<?php
    $mobil = "Honda Jazz";
    if($mobil == "Honda Mobilio")
    {
      //jika kondisinya benar, maka statement ini dijalankan
      echo "Mobil ini adalah Honda Mobilio <br>";
      echo "Harga mobil Honda Mobilio : Rp. 181.000.000";
    }
    else
        if($mobil == "Honda Brio")
        {
          //jika kondisinya salah, maka kondisi di sini akan di cek.
          //jika kondisinya benar, maka statement ini dijalankan
          echo "Mobil ini adalah  Honda Brio <br>";
          echo "Harga mobil Honda Brio : Rp. 146.000.000";
        }
          else
              if($mobil == "Honda City")
                  echo " Mobil ini adalah Honda City <br>";
                else if($mobil == "Honda CRV")
                        echo "Mobil ini adalah Honda CRV <br>";
                      else
                      {
                        echo "Mobil ini adalah Honda Jazz <br>";
                        echo " Harga mobil Honda Jazz : Rp. 227.000.000";
                      }
 ?>
