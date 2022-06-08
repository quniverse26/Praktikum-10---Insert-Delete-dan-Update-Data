<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "myweb");

$result = mysqli_query($conn, "SELECT * FROM guestbook");

?>

<!DOCTYPE html>
<html>
<head>
	<title> Halaman Index </title>
</head>
<body>

	<h1> Daftar Buku Tamu </h1>

	<a href="formguestbook.php"> Tambah data guestbook </a>
	<br> <br>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th> No. </th>
			<th> Tanggal </th>
			<th> Nama </th>
			<th> Email </th>
			<th> Alamat </th>
			<th> Kota </th>
			<th> Pesan </th>
			<th> Aksi </th>
		</tr>

		<?php $i = 1; ?>
		<?php
			while ($row = mysqli_fetch_assoc($result)) :
		?>

		<tr>
			<td> <?= $i; ?> </td>
			<td> <?= $row["posted"]; ?> </td>
			<td> <?= $row["name"]; ?> </td>
			<td> <?= $row["email"]; ?>. </td>
			<td> <?= $row["adress"]; ?>. </td>
			<td> <?= $row["city"]; ?>. </td>
			<td> <?= $row["message"]; ?>. </td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>"> Ubah </a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?');"> Hapus </a>
			</td>
		</tr>

		<?php $i++; ?>
		<?php endwhile; ?>

	</table>

	<br>
	<a href="menu.php"> < Kembali ke menu utama </a>

</body>
</html>