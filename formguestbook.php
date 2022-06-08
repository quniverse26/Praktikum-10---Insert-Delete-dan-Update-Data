<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());

mysqli_close($conn);
}

function registrasi($data) {
	global $conn;

	$posted = strtolower(stripcslashes($data["posted"]));
	$name = strtolower(stripcslashes($data["name"]));
	$email = strtolower(stripcslashes($data["email"]));
	$address = strtolower(stripcslashes($data["address"]));
	$city = strtolower(stripcslashes($data["city"]));
	$message = strtolower(stripcslashes($data["message"]));

	//menambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO guestbook VALUES ('', '$posted', '$name', '$email', '$address', '$city', '$message')");

	return mysqli_affected_rows($conn);
}

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
			alert('Guest baru berhasil terdaftar!');
			document.location.href = 'index.php';
		</script>";
	} else {
		echo mysqli_error($conn);
		echo "<script>
			alert('Guest baru gagal terdaftar!');
		</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Form Guestbook </title>
</head>
<body>
	<h1> Form Guestbook </h1>

	<form action="" method="POST">

		<ul>

			<li>
				<label for="posted"> Tanggal </label>
				<input type="date" name="posted" id="posted">
			</li>

			<li>
				<label for="name"> Name </label>
				<input type="text" name="name" id="name">
			</li>

			<li>
				<label for="email"> Email </label>
				<input type="text" name="email" id="email">
			</li>

			<li>
				<label for="address"> Address </label>
				<input type="text" name="address" id="address">
			</li>

			<li>
				<label for="city"> City </label>
				<input type="text" name="city" id="city">
			</li>

			<li>
				<label for="message"> Message </label>
				<input type="text" name="message" id="message">
			</li>

			<li>
				<button type="submit" name="register"> Submit </button>
			</li>
			
		</ul>

	</form>

	<a href="menu.php"> < Kembali ke menu utama </a>
	
</body>
</html>