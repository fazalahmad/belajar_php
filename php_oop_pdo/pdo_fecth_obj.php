<?php
    $dsn = 'mysql:host=127.0.0.1;dbname=workshop';
    $username = 'root';
    $passwd = '';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $table = 'buku';
    $sql = "SELECT * FROM $table";

    try {
        $conn = new PDO($dsn, $username, $passwd, $options);
        $query = $conn->query($sql);
        foreach ($query->fetchAll(PDO::FETCH_OBJ) as $row){
            print $row->judul_buku.'<br>';
            print $row->penulis.'<br>';
            print $row->tahun.'<br>';
            print $row->penerbit.'<br>';
            print '<br>';
        }
    } catch (PDOException $ex) {
        print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '.
         $ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
    }
?>
