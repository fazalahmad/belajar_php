<?php
    $nilai = 59;
    $pecahan = 78.9;
    $string = "isi variabel string dan pecahan ini tidak akan ditampilkan";

    if (is_integer($nilai))
    {
      echo "Tipe data ini Integer :  ".is_integer($nilai);
      echo "<br>";
    }

    if(is_integer($pecahan))
    {
      echo "Tipe data ini float ".is_integer($pecahan);
      echo "<br>";
    }

    if(is_integer($string))
    {
      echo "Tipe data ini float ".is_integer($string);
      echo "<br>";
    }

?>
