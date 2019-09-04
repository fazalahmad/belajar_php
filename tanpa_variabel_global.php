<?php

    /*function nilai()
    {
        $c = 5;
        $d = $c + 10;
    }

    echo  "Nilai dari \$c dan \$d didalam badan fungsi tidak dapat di tampilkan <br>";
    nilai(); //sebagai pengembalian nilai yang di tampung fungsi
    echo "\$c=$c dan \$d=$d";*/

    //variabel lokal
    $a = 7;
    $b = $a + 1;

    function nilai()
    {
        global $b;
        $d = 4;
        global $h;
        $h = $b + $d;
    }
    echo  "Nilai dari \$b diakses dari variabel lokal <br>";
    echo " \$b = $b <br><br>";
    
    echo "Nilai dari \$h yang diakses dari badan fungsi: <br>";
    nilai(); //sebagai pengembalian nilai yang di tampung fungsi
    echo "\$h = $h";
?>