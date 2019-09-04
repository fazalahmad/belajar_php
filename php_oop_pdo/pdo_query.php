<?php
    $dsn = 'mysql:host=localhost; dbname=workshop';
    $username = 'root';
    $passwd = '';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $table = 'buku';
    $kolom = array('judul_buku','penulis','tahun','penerbit');

?>
<html>
    <head>
        <title>Input Data</title>
    </head>
    <body>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
            <table>
                <tr>
                    <td>Judul Buku</td>
                    <td>:</td>
                    <td><input type="text" name="title" size="51"></td>
                </tr>
                <tr>
                    <td>Penulis</td>
                    <td>:</td>
                    <td><input type="text" name="author" size="51"></td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td>:</td>
                    <td><input type="text" name="year" size="6"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>:</td>
                    <td><input type="text" name="distributor" size="51"></td>
                </tr>
                <tr>
                    <td colspan="3"><button name='input' type="submit">SUBMIT</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['input'])){
        $data[$kolom[0]] = $_POST['title'];
        $data[$kolom[1]] = $_POST['author'];
        $data[$kolom[2]] = $_POST['year'];
        $data[$kolom[3]] = $_POST['distributor'];

        $sql = "INSERT INTO $table ($kolom[0],$kolom[1],$kolom[2],$kolom[3])"
            . " VALUES('".$data[$kolom[0]]."','".$data[$kolom[1]]."','".$data[$kolom[2]]
            ."','".$data[$kolom[3]]."') ";
        try {
            $conn = new PDO($dsn, $username, $passwd, $options);
            $query = $conn->query($sql);

            echo $query->rowCount().' data ditambahkan.<br>';
            $conn = null;

            // foreach ($query->fetchAll(PDO::FETCH_OBJ) as $row){
            //     print $row->judul_buku.'<br>';
            //     print $row->penulis.'<br>';
            //     print $row->tahun.'<br>';
            //     print $row->penerbit.'<br>';
            //     print '<br>';
            // }
        } catch (PDOException $ex) {
            print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
            .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
        }
    }
?>
