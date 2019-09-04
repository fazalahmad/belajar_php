<?php
    $tanggal_1 = date("d-m-Y");
    echo "Penggunaan Tanggal dalam bentuk Angka : $tanggal_1 <br><br>";

    $tanggal_2 = date("l, d  F  Y");
    echo "Hari dan Tanggal Ujian : $tanggal_2 <br><br>";

    $tanggal_3 = date("l, d  F  Y -- H:i:s A");
    echo "Pukul : $tanggal_3 <br><br>";
?>