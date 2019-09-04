<?php
    $string1 = "Kita ";
    $string2 = "akan belajar pemrograman PHP lebih dalam lagi. ";

    $c = $string1.$string2;
    echo $c; echo "<br><br>";

    $c = "Arinda ".$string2;
    echo $c; echo "<br><br>";

    /*jika $string1 dan $string2 di masukan dalam tanda petik dua, 
     maka tanda titik tidak akan menjadi operator penghubung*/
    $c = "$string1.$string2";
    echo $c;
 ?>
