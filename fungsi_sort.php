<?php
    $mahasiswa = array("Ginta", "Andi", "Agil", "Zera");
    sort($mahasiswa);
    echo "Nama mahasiswa diurutkan berdasarkan huruf A-z : <br>";
    for($x=0; $x<4; $x++)
    {
        echo "Nama ke-[$x+1] : $mahasiswa[$x]";
        echo "<br>";
    }

    echo "<br><br><br>";

    $angka = [4,3,10,15,2];
    sort($angka);
    echo "Angka diurutkan berdasarkan angka kecil ke besar : <br>";
    $a=0;
    while($a<6)
    {
        echo "Angka : $angka[$a]";
        $a = $a+1;
        echo "<br>";
    }
?>