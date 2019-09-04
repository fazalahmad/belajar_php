<?php
	session_start();
	if (isset($_SESSION["user"]))
	{
		echo "Selamat Datang" . " " .$_SESSION["user"];
		echo "<br><br><a href='logout.php'>Logout</a>";
	}
	else
	{
		echo "Login dulu gan :)<br>";
		echo "<a href='login.php'>Kembali</a>";
	}
?>
