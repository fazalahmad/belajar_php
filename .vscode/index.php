<html>
<head></head>
<body>
<form method="POST" action="">
<table>
<tr>
<td>Bilangan Pertama</td>
<td>:<input type="text" name="bil1" /></td>
</tr>
<tr>
<td>Bilangan Kedua</td>
<td>: <input type="text" name="bil2" /></td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="submit1"/>
<input type="submit" name="submit2" value="Kurang"/>
<input type="submit" name="submit3" value="Kali"/>
<input type="submit" name="submit4" value="bagi"/>
<input type="reset" name="reset" value="reset">
</td>
</tr>
<?php
 $hasil = 0;   
if (isset($_POST['submit1']))
{
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $hasil =$bil1+$bil2;
    //echo "Hasil Penjumlahan Adalah $hasil";
}
elseif (isset($_POST['submit2']))
    {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $hasil = $bil1 - $bil2;
        //echo "jumlah nya adalah $hasil";
    }
    elseif (isset($_POST['submit3']))
    {
        $hasil = $bil1 * $bil2;
        //echo "Jumlanya adalah $hasil";
    }
        elseif (isset($_POST['submit4']))
        {
            $hasil = $bil1 / $bil2;
            //echo "Hasil pembagiannya adalah $hasil";
        }
?>
<tr>
<td>Hasil</td>
<td>: <input type="text" value="<?php echo $hasil; ?>" /></td>
</tr>
</table>

    
</form>
</body>
</html>