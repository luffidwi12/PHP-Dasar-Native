<?php 
//cek apakah tidak ada data di $_GET
//isset adalah untuk mengecek apakah variabel itu pernah di bikin atau belum

if(!isset($_GET["nama"])||
	!isset($_GET["nim"]) ||
	!isset($_GET["email"]) ||
	!isset($_GET["jurusan"])||
	!isset($_GET["gambar"])
){
	//redirect
	header("Location: latihan1.php");
	exit;
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>
	<ul>
		<li>
			<img src="img/<?=$_GET["gambar"] ?> ?>" width="100px;">
		</li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["nim"]; ?></li>
		<li><?= $_GET["email"] ?></li>
		<li><?= $_GET["jurusan"] ?></li>
		<li><?= $_GET["gambar"] ?></li>
	</ul>

	<a href="latihan1.php">Kembali</a>

</body>
</html>