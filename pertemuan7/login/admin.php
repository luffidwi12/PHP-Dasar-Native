<?php 

if(!isset($_SESSION["username"])){
	header("Location: login.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Selamat Datang, Admin</h1>

	<a href="login.php">Logout</a>

</body>
</html>