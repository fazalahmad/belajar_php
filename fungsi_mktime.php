<?php
    echo "Fungsi date : Tanggal dan waktu saat ini.<br>";
    echo "Waktu Program ini dijalankan adalah : ".date("Y-m-d | h:i:s");
    echo "<br><br>";
    
    //mktime( hour, minute, second, month, day, year)
    $a = mktime(01, 53, 25, 04, 03, 2003 );
    $hasil = date("Y-m-d h:i:s", $a);
    echo "fungsi mktime : Tanggal dan waktu yang kita inginkan.<br>";
    echo "Menggunakan fungsi mktime : $hasil <br><br>";

    $time = date("Y m d", mktime(0,0,0, date('m')+3, date('d')+7, date('Y') ) );
    echo "Fungsi mktime (Tahun Bulan Tanggal) : $time";
?>