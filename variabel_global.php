<?php

    function nilai()
    {
        global $c;
        global $d;
        $c = 5;
        $d = $c + 10;
    }

    echo  "Nilai dari \$c dan \$d didalam badan fungsi dapat di tampilkan <br>";
    nilai(); //sebagai pengembalian nilai yang di tampung fungsi
    echo "\$c=$c dan \$d=$d";
?>