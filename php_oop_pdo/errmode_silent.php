<?php
    $dsn = 'mysql:host=localhost; dbname=workshop';
    $username = 'root';
    $password = '';

    try{
        $dbConnection = new PDO($dsn, $username, $password);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        $hasil = $dbConnection->query("SELECT * FROM buku");
        echo $dbConnection->errorCode();
        print('<br/>Koneksi Berhasil');
    }
    catch(PDOException $e){
        print('Kesalahan : '.$e->getMessage().'<br>');
        die();
    }
?>
