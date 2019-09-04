<?php
    $nilai = 59;
    $pecahan = 78.9;
    $string = "isi variabel string dan pecahan ini tidak akan ditampilkan";

    if (is_int($nilai))
    {
      echo "Tipe data ini Integer :  ".is_integer($nilai);
      echo "<br>";
    }

    if(is_double($pecahan))
    {
      echo "Tipe data ini Double : ".is_double($pecahan);
      echo "<br>";
    }

    if(is_string($string))
    {
      echo "Tipe data ini String : ".is_string($string);
      echo "<br>";
    }

    $hasil = (is_scalar($nilai) && is_scalar($pecahan) && is_scalar($string));
    if($hasil)
    {
      echo "Tipe data ini benar integer, double, dan string ".$hasil;
      echo "<br>";
    }
?>
