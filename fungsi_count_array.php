<?php
    $mahasiswa = array("Ginta", "Andi", "Agil", "Zera", "Ikalsa", "Penti Citra");
    $hasil = count($mahasiswa); // fungsi jumlah data array
    echo "Jumlah data / element dalam array : $hasil<br><br><br>";

    sort($mahasiswa); //fungsi pengurutan
    echo "Nama mahasiswa diurutkan berdasarkan huruf A-z : <br>";
    
    $x=0;
    while($x<$hasil)
    {
        echo "Nama ke-[$x+1] : $mahasiswa[$x]";
        $x = $x+1;
        echo "<br>";
    }
?>