<?php

include './koneksi.php';

$koneksi = new Koneksi();
$koneksi->username = 'admin';

// menampilkan attribute/property username
echo $koneksi->username.'<br>';
echo $koneksi::HOST;

// memanggil method insert()
$koneksi->insert();
?>
