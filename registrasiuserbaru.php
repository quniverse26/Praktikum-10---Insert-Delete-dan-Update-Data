<?php

require 'koneksi.php';

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
			alert('User baru berhasil ditambahkan!');
		</script>";
	} else {
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Registrasi User Baru </title>
</head>
<body>
	<h1> Registrasi User Baru </h1>

	<form action="" method="POST">
		<ul>
			<li>
				<label> Name </label>
				<input type="text" name="name" id="name">
			</li>

			<li>
				<label> Address </label>
				<input type="text" name="address" id="address">
			</li>

			<li>
				<label> Email </label>
				<input type="text" name="email" id="email">
			</li>

			<li>
				<label> Homepage </label>
				<input type="text" name="homepage" id="homepage">
			</li>

			<li>
				<label> Username </label>
				<input type="text" name="username" id="username">
			</li>

			<li>
				<label> Password </label>
				<input type="password" name="password" id="password">
			</li>

			<li>
				<button type="submit" name="register"> Register </button>
			</li>
		</ul>
	</form>
</body>
</html>