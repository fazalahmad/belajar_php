<?php
    $dsn = 'mysql:host=localhost;dbname=workshop';
    $username = 'root';
    $passwd = '';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $table = 'buku';
    $sql = "SELECT * FROM $table";

    try {
        $conn = new PDO($dsn, $username, $passwd, $options);
        $query = $conn->query($sql);
        ?>
        <body>
        <table>
            <thead>
                <tr>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Penerbit</th>
                </tr>
            </thead>
            <tbody>
        <?php
        foreach ($query->fetchAll() as $row){
          ?>
          
              <tr>
                <td><?php echo $row['judul_buku']; ?></td>
                <td><?php echo $row['penulis']; ?></td>
                <td><?php echo $row['tahun']; ?></td>
                <td><?php echo $row['penerbit']; ?></td>
              </tr>

            <?php
        }
        ?>

          </tbody>
        </table>
      </body>
        <?php
    } catch (PDOException $ex) {
        print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '.
        $ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
    }
?>
