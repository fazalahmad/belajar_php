<?php
    $a = 5;
    echo "Nilai \$a (awal) = $a <br>";

    $a += 3;
    echo "Nilai \$a (baru) = $a <br>";

    $b = 2;
    $b -= $a;
    echo "Nilai \$b (baru 1) = $b <br>";

    $b *= 3;
    echo "Nilai \$b (baru 2) = $b <br>";

    $b /= $a - 2;
    echo "Nilai \$b (baru 3) = $b <br>";

    $a %= $b;
    echo "Nilai \$a (lebih baru) = $a <br>";

    $c = -13;
    $c %= 5;
    echo "Nilai \$c (awal) = $c <br>";
 ?>
