<?php
    class tampilbuku{
        public function showData(){
            echo 'Judul    : '.$this->judul_buku.'<br>';
            echo 'Penulis  : '.$this->penulis.'<br>';
            echo 'Tahun    : '.$this->tahun.'<br>';
            echo 'Penerbit : '.$this->penerbit.'<br>';
            echo '<br>';
        }
    }

    $dsn = 'mysql:host=localhost; dbname=workshop';
    $username = 'root';
    $password = '';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $table = 'buku';
    $sql = "SELECT * FROM $table";

    try {
        $conn = new PDO($dsn, $username, $password, $options);
        $query = $conn->query($sql);
        $hasil = $query->fetchAll(PDO::FETCH_CLASS, 'tampilbuku');

        foreach ($hasil as $row){
            $row->showData();
        }
    } catch (PDOException $ex) {
        print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '.
         $ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
    }
?>
