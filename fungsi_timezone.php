<?php
    echo "Penggunaan fungsi date pada suatu negara dengan zona waktu yang bukan GMT+0, 
    akan menghasilkan waktu yang berbeda antara waktu dikomputer dengan waktu dibrowser, seperti dibawah ini.<br>";
    echo 'Default Timezone: '. date('d-m-Y H:i:s');
    echo "<br><br>";
    
    echo "Untuk menyamakan waktu di komputer dengan waktu yang akan ditampilkan dibrowser 
    dapat menggunakan fungsi timezone dengan memasukan parameternya, seperti dibawah ini.<br>";
    date_default_timezone_set("Asia/Jakarta");
    echo 'Indonesian Timezone: ' . date('d-m-Y H:i:s');

?>