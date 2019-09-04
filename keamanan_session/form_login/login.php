<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="login">
	<H1>Sistem Login</H1>
	<form action="login.php" method="post" id="input">
		<input type="text" name="username" placeholder="username"><br>
		<input type="password" name="password" placeholder="password"><br>

		<?php
		session_start();

		//set username dan password ke dalam variabel $user dan $pass
		$user = "rhozi";
		$pass = "123";

		if (isset($_POST['submit']))
		{
			if ($_POST['username'] == $user && $_POST['password'] == $pass)
			{
				$_SESSION['user'] = $_POST['username'];
        //ketika button Kirim di klik maka halaman profil
        header('Location: profil.php');
			}
			else
			{
				echo "gagal login";
			}
		}
		?>
<br>
		<input type="submit" name="submit" value="Login">
	</form>
</div>
</body>
</html>
