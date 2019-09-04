<?php
    
    function penjumlahan ($a=3, $b=5, $c=8, $d=14)
    {
        $jumlah = $a + $b + $c + $d;
        echo $jumlah;
    }

    echo "Cara 1, Penjumlahan 3+5+8+14 : ";
    echo penjumlahan();
    echo "<br>Cara 2, Penjumlahan 8+5+8+14 : ";
    echo penjumlahan(8);
    echo "<br>Cara 3, Penjumlahan 1+2+3+4 : ";
    echo penjumlahan(1,2,3,4);

?>