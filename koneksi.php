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

	$name = strtolower(stripcslashes($data["name"]));
	$address = strtolower(stripcslashes($data["address"]));
	$email = strtolower(stripcslashes($data["email"]));
	$homepage = strtolower(stripcslashes($data["homepage"]));
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	//menambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES ('', '$name', '$address', '$email', '$homepage', '$username', '$password')");

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM guestbook WHERE id = $id");

	return mysqli_affected_rows($conn);
}

?>