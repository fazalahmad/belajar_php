<?php

    function volume_bola($r)
    {
        define("phi", 3.14);
        //const phi = 3.14;
        $volume = 4/3 * phi * $r * $r * $r;

        echo "Perhitungan Volume Bola dari 4/3 * phi * $r * $r * $r = ";
        echo $volume;
    }

    volume_bola(10);
?>