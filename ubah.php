<?php

require 'koneksi.php';

//ambil data di URL
$id = $_GET["id"];
$posted = $_POST['posted'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$message = $_POST['message'];

mysqli_query("UPDATE user SET posted='$posted', name='$name',email='$email',address='$address', city='$city', message='$message'");

header("location:index.php?pesan=update");

$guest = mysqli_query($conn, "SELECT * FROM guestbook WHERE id = $id");
$nomor = 1;
while ($data = mysqli_fetch_array($guest)) {
}

//mengecek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["register"])) {

	//mengecek apakah data berhasil diubah atau tidak
	if (ubah($_POST) > 0) {
		echo "<script>
			alert('Data berhasil diubah!');
			document.location.href = 'index.php';
		</script>";
	} else {
		echo "<script>
			alert('Data gagal diubah!');
			document.location.href = 'index.php';
		</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Form Ubah Data Tamu </title>
</head>
<body>
	<h1> Form Ubah Data Guestbook </h1>

	<form action="" method="POST">

		<ul>

			<li>
				<label for="posted"> Tanggal </label>
				<input type="date" name="posted" id="posted" value="<?php echo $data['posted'] ?>">
			</li>

			<li>
				<label for="name"> Name </label>
				<input type="text" name="name" id="name" value="<?php echo $data['name'] ?>">
			</li>

			<li>
				<label for="email"> Email </label>
				<input type="text" name="email" id="email" value="<?php echo $data['email'] ?>">
			</li>

			<li>
				<label for="address"> Address </label>
				<input type="text" name="address" id="address" value="<?php echo $data['address'] ?>">
			</li>

			<li>
				<label for="city"> City </label>
				<input type="text" name="city" id="city" value="<?php echo $data['city'] ?>"]; ?>">
			</li>

			<li>
				<label for="message"> Message </label>
				<input type="text" name="message" id="message" value="<?php echo $data['message'] ?>">
			</li>

			<li>
				<button type="submit" name="register"> Submit </button>
			</li>
			
		</ul>

	</form>
</body>
</html>