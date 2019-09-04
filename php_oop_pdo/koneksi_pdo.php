<?php
    $dsn = 'mysql:host=localhost; dbname=workshop1234';
    $username = 'root';
    $password = '';

    try{
        $dbConnection = new PDO($dsn, $username, $password);
        echo "Terkoneksi ke MySQL";
    }
    catch(PDOException $e){
        print("Kesalahan : <br>");
        print('Pesan  : '.$e->getMessage()."<br>");
        echo('Berkas : '.$e->getFile()."<br>");
        echo('Baris  : '.$e->getLine()."<br>");

        die();
    }
?>
