<?php


    echo "###### Pre Increment #####<br>";
    $a = 5;
    echo "Nilai \$a Awal = ".$a;
    echo "<br>";
    echo "Nilai \$a sampai titik ++\$a = ".++$a;
    echo "<br><br>";

    echo "###### Pre Decrement #####<br>";
    $b = 4;
    echo "Nilai \$b Awal = ".$b;
    echo "<br>";
    echo "Nilai \$b  sampai titik --\$b = ".--$b;
    echo "<br><br>";

    echo "###### Post Increment #####<br>";
    $c = 10;
    echo "Nilai \$c awal = ".$c;
    echo "<br>";
    echo "Nilai \$c sampai titik \$c++ = ".$c++;
    echo "<br>";
    echo "Nilai \$c setelah melewati titk \$c++ = ".$c;
    echo "<br><br>";

    echo "###### Post Decrement #####<br>";
    $d = 15;
    echo "Nilai \$d awal = ".$d;
    echo "<br>";
    echo "Nilai \$d sampai titik \$d-- = ".$d--;
    echo "<br>";
    echo "Nilai \$d setelah melewati titk \$d-- = ".$d;
 ?>
