<?php 
session_start();

if(!isset($_SESSION["login"])){
	header('Location:login.php');
	exit;
}
require 'function.php';

//pagination
//kofigurasi

$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM data_barang"));
$jumlahHalaman = ceil($jumlahData/$jumlahDataPerhalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;




//ambil data dari tabel data_barang/query dari data_barang
$data_barang = query("SELECT * FROM data_barang LIMIT $awalData, $jumlahDataPerhalaman");

//jika tombol cari di tekan
if(isset($_POST["cari"])){
	$data_barang = cari($_POST["keyword"]);
}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Barang</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Daftar Barang</h1>

	<a href="tambah.php">Tambah Data Barang</a>
	<form action="" method="post">
		
		<input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian..." autocomplete="off">
		<button type="submit" name="cari">Cari!</button>

	</form>
	<br><br>
	<!-- Navigasi -->
	<?php if($halamanAktif > 1): ?>
	<a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
<?php endif; ?>

	<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
		<?php if($i == $halamanAktif) : ?>
		<a href="?halaman=<?= $i; ?>" style="font-weight: bold; color:red;"><?= $i; ?></a>
		<?php else : ?>
			<a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
		<?php endif; ?>
	<?php endfor; ?>

	<?php if($halamanAktif < $jumlahHalaman): ?>
	<a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
	<?php endif; ?>



	<br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO.</th>
			<th>SUPPLIER</th>
			<th>NAMA BARANG</th>
			<th>HARGA</th>
			<th>BERAT</th>
			<th>KEMASAN</th>
			<th>TANGGAL</th>
			<th>STOK</th>
			<th>GAMBAR</th>
			<th>AKSI</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach($data_barang as $brg): ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $brg['supplier']; ?></td>
			<td><?= $brg['nama_barang']; ?></td>
			<td><?= $brg['harga']; ?></td>
			<td><?= $brg['berat']; ?></td>
			<td><?= $brg['kemasan']; ?></td>
			<td><?= $brg['tanggal']; ?></td>
			<td><?= $brg['stok']; ?></td>
			<td>
				<img src="img/<?= $brg['gambar'] ?>" width="50px">
			</td>
			<td>
				<a href="ubah.php?id=<?= $brg["id"]; ?>">Ubah</a> |
				<a href="hapus.php?id=<?= $brg["id"]; ?>">Hapus</a>
			</td>
		</tr>
		<?php $i++ ?>
		<?php endforeach; ?>
	</table>

</body>
</html>