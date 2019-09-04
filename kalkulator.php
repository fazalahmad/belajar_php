<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kalkulator</title>
</head>
<body>
    <form method="POST" action="kalkulator.php">
        <table border="1" width="300px" height="200px">
            <tr height="10">
                <td align="center" colspan="2"> <h2>Kalkulator online</h2></td>
            </tr>

            <tr>
                <td> <input type="text" name="bil_1" placeholder="Bilangan ke 1"> </td>
                <td rowspan="2">
                    <table width="100%">
                        <tr align="center">
                            <td width="50%"> 
                                <button type="submit" name="tambah">+</button> </td>
                            <td width="50%"> <button type="submit" name="kali">x</button> </td>
                        </tr>
                        <tr>
                            <td height="10"> </td>
                        </tr>
                        <tr align="center">
                            <td width="50%"> <button type="submit" name="kurang">-</button> </td>
                            <td width="50%"> <button type="submit" name="bagi">/</button> </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="bil_2" placeholder="Bilangan ke 2"></td>
            </tr>

                <?php
                $hasil = 0;   
                if (isset($_POST['tambah']))
                {
                    $bil1 = $_POST['bil_1'];
                    $bil2 = $_POST['bil_2'];
                    $hasil =$bil1+$bil2;
                }
                    elseif (isset($_POST['kurang']))
                        {
                            $bil1 = $_POST['bil_1'];
                            $bil2 = $_POST['bil_2'];
                            $hasil = $bil1 - $bil2;
                        }
                        elseif (isset($_POST['kali']))
                        {
                            $bil1 = $_POST['bil_1'];
                            $bil2 = $_POST['bil_2'];
                            $hasil = $bil1 * $bil2;
                        }
                            elseif (isset($_POST['bagi']))
                            {
                                $bil1 = $_POST['bil_1'];
                                $bil2 = $_POST['bil_2'];
                                $hasil = $bil1 / $bil2;
                            }
                ?>

            <tr>
                <td colspan="2" align="center">
                    <input type="text" value="<?php echo $hasil; ?>" size="2">
                </td>
            </tr>
        </table>
       
    </form>
</body>
</html>