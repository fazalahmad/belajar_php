<?php
    $d=strtotime("10:30pm April 15 2014");  
    echo "Penggunaan Fungsi strtotime : <br><br>";
    echo "Fungsi strtotime 1 : ".date("Y-m-d h:i:s A", $d);
    
    echo "<br><br>";

    $timestamp = strtotime('1945-05-31');
    echo "Fungsi strtotime 2 : ".date('d-m-Y', strtotime('+1 day', $timestamp)); 

?>