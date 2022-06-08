<?php

require 'koneksi.php';

if (isset($_POST["login"])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$hasil = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//mengecek username
	if (mysqli_num_rows($hasil) === 1) {
		
		$row = mysqli_fetch_assoc($hasil);
		if (password_verify($password, $row["password"])) {
			header("Location: formguestbook.php");
	exit;
		}

	$error = true;

	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Form Login </title>
</head>
<body>
	<h1> Form Login </h1>

	<form action="menu.php" method="POST">

		<ul>

			<li>
				<label for="username"> Username </label>
				<input type="text" name="username" id="username">
			</li>

			<li>
				<label for="password"> Password </label>
				<input type="password" name="password" id="password">
			</li>

			<li>
				<button type="submit" name="login"> Login </button>
			</li>

			<p> Belum memiliki akun? <a href="registrasiuserbaru.php"> Registrasi </a></p>

		</ul>

	</form>

</body>

</html>