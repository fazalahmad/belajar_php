<?php

//untuk memulai session
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mengambil informasi session</title>
</head>
<body>
    <?php
        echo "username anda : ". $_SESSION["user"];
        echo "<br>password anda : ". $_SESSION["password"];
        echo "<br>nama lengkap  : ". $_SESSION["nama_lengkap"];
    ?>
</body>
</html>
