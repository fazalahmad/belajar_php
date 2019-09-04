<?php
	//memulai session
	session_start();

	//untuk mengakhiri atau menghapus session
	session_destroy();

	header("Location: login.php");
?>
