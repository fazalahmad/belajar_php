<?php
    include 'DBConnection.php';
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
                    <td><button type="button" onclick="location.href='index.php?aksi=delete&author=<?php echo $data['penulis'] ?>';">Hapus</button></td>
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
    </body>
</html>

<?php
if(isset($_GET['aksi'])){
    if($_GET['aksi'] == 'delete'){
        $penulis = $_GET['author'];
        echo $penulis;
        $dbConn->delete("penulis='$penulis'");
        header('location: index.php');
    }
}
?>
