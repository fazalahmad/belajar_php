<?php
    $a = 5;
    $b = 6;
    $c = 7;
    $d = 2;

    echo "Penggunaan Operator Logika<br>";
    echo "AND : ($a<$b) && ($c>$d) = "; var_dump( ($a<$b) && ($c>$d) );
    echo "<br>";
    echo "OR : ($a<$b) || ($c<$d) = "; var_dump( ($a<$b) || ($c<$d) );
    echo "<br>";
    echo "Operator Asli : ($a>$b) = "; var_dump( ($a>$b) );
    echo "<br>";
    echo "Not : !($a>$b) = "; var_dump( !($a>$b) );
    echo "<br>";
    echo "Xor (Salah satu bernilai benar) : ($a<$b) xor ($c<$d) = "; var_dump( ($a<$b) xor ($c<$d) );
    echo "<br>";
    echo "Xor (Keduanya bernilai benar) : ($a<$b) xor ($c>$d) = "; var_dump( ($a<$b) xor ($c>$d) );
 ?>
