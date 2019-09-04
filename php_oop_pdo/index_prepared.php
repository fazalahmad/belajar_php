<?php
    include 'DBConnection_prepared.php';
    $dbConn = new DBConnection();
?>
<html>
    <head>
        <title>Input Data</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Judul Buku</td>
                    <td>Pengarang</td>
                    <td>Tahun</td>
                    <td>Penerbit</td>
                    <td>Opsi</td>
                </tr>
            </thead>
            <tbody>
<?php
    $hasil = $dbConn->fetch();
    if(isset($hasil)){
        foreach ($hasil as $data){
?>
                <tr>
                    <td><?php echo $data['judul_buku']; ?></td>
                    <td><?php echo $data['penulis']; ?></td>
                    <td><?php echo $data['tahun']; ?></td>
                    <td><?php echo $data['penerbit']; ?></td>
                    <td> <button type="button" onclick="location.href='index_prepared.php?aksi=delete&author=<?php echo $data['penulis'] ?>';">Hapus</button></td>
                </tr>
<?php
        }
    }
    else{
        print '<tr><td colspan=5>No Data</td></tr>';
    }
?>
            </tbody>
        </table>
        <br/>
        <br/>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <table>
                <tr>
                    <td colspan="4">Input Buku</td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Judul Buku" size="31" name="title"></td>
                    <td><input type="text" placeholder="Penulis" size="21" name="author"></td>
                    <td><input type="text" placeholder="Tahun" size="4" name="year"></td>
                    <td><input type="text" placeholder="Penerbit" size="11" name="distributor"></td>
                </tr>
                <tr>
                    <td colspan="4"><button name="tambah" type="submit">SUBMIT</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if(isset($_GET['aksi'])){
    if($_GET['aksi'] == 'delete'){
        $penulis = $_GET['author'];
        echo $penulis;
        $dbConn->delete("penulis='$penulis'");
        header('location: index_prepared.php');
    }
}

if(isset($_POST['tambah'])){
    $data = null;
    $data[0] = $_POST['title'];
    $data[1] = $_POST['author'];
    $data[2] = $_POST['year'];
    $data[3] = $_POST['distributor'];
    header('location: index_prepared.php');
    $dbConn->insert($data);
}
?>
