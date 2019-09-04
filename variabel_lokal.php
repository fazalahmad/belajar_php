<?php
    //variabel lokal
    $a = 7;
    $b = $a + 1;

    function nilai()
    {
        $a;
        $d = 4;
        $h = $a + $d;
    }
    echo  "Nilai dari \$a dan \$b diakses dari variabel lokal <br>";
    echo " \$a=$a dan \$b=$b <br><br>";
    
    echo "Nilai dari \$h tidak bisa diakses dari badan fungsi: ";
    echo nilai();
    echo $h;
?>