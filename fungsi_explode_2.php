<?php
    $kalimat = "Kita sedang mempelajari fungsi explode";
    echo "Awalnya Data String : $kalimat <br><br>";

    $hasil = explode (" ",$kalimat, 3);
    echo "Dengan Fungsi explode, menghasilkan data seperti dibawah ini. <br>";
    echo "Data 1 : $hasil[0] <br>";
    echo "Data 2 : $hasil[1] <br>";
    echo "Data 3 : $hasil[2] <br>";

 ?>
