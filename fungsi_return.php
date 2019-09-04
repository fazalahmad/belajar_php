<?php
    //pembuatan fungsi
    function LuasSegitiga ($alas, $tinggi)
    {
        $luas = ($alas * $tinggi) / 2 ;
        return $luas;
    }

    //memanggil fungsi yang dibuat
    $hasil = LuasSegitiga(8,10);
    echo "Luas Segitiga dari (8x10) / 2 = $hasil<br>";
    // atau

    echo "Luas Segitiga dari (20x5) / 2 = ";
    echo LuasSegitiga(20,5);

?>