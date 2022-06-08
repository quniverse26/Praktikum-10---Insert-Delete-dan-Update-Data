<?php

require 'koneksi.php';

if (isset($_POST["login"])) {
	
	$username = $_POST['username'];;

	$hasil = mysqli_query($conn, "SELECT * FROM guestbook WHERE username = '$username'");

}

?>

<html>
	<head>
		<title> Halaman Menu </title>
		<style type="text/css">
	body{
		font-family: 'Poppins', sans-serif;
  		margin: 0;
  		padding: 0;
  		background-color: #ffffff
	}
	* {
  		box-sizing: border-box;
	}
	ul {
  		list-style: none;
	}
	nav {
		width: 100%;
		box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.05);
		z-index: 9999;
		position: sticky;
		background: #ffffff;
		top: 0;
		left: 0;
	}
	.menu {
  		display: flex;
  		margin: auto;
	}
	.menu li {
		position: relative;
		margin: 10px;
		display: flex;
		text-transform: capitalize;
		font-weight: 500;
	}
	.menu li a {
	  	color: #555555;
	  	font-size: 0.9rem;
	}
	.menu li a:hover,
	.menu li a.active {
  		color: #088178;
	}
	.right-menu a {
	  	margin: 0 10px;
	  	font-size: 2rem;
	  	color: rgba(0, 0, 0, 0.7);
	}
</style>

	</head>
	
	<body>

		<h2 align="center">Menu Buku Tamu</h2>
		<nav>
			<div class="menu-kategories">
				<ul class="menu">
			        <li><a href=""> Home </a></li>
			        <li><a href="formguestbook.php"> Tambah Data Tamu</a></li>
			        <li><a href="index.php"> Lihat Data Tamu </a></li>
			        <li><a href="login.php">Logout</a></li>
        		</ul>
			</div>
		</nav>

		<h2 align="center"> Selamat Datang, </h2>
		<h3 align="center"> <?php echo $_POST["username"]; ?>  pada hari <?php echo date("D"); ?> tanggal <?php echo date("m-F-Y"); ?> </h3>
	
	</body>

</html>