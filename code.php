<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kalkulator</title>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td> Masukan Angka </td>
                <td> <input type="text" name="bil1"> </td>
            </tr>
            <tr colspan="2">
                <td> <input type="submit" name"" value"Proses"> </td>
            </tr>
                <?php
                    
                    if(isset($_POST['bil1'])){
                        //$bil1 = $_POST[bil1];
                ?>
            <tr>
                <td>Hasil</td>
                <td> <input type="text" value="<?php echo $_POST['bil1']; ?>"> </td>
            </tr> <?php } ?>
        </table>

        
    </form>
</body>
</html>