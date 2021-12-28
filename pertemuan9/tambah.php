<?php 
require 'function.php';




 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>

	<h1>Tambah Data Mahasiswa</h1> 

	<form action="" method="">
	<ul>
		<li>
			<label for="supplier">Supplier :</label>
			<input type="text" name="supplier" id="supplier" required>
		</li>

		<li>
			<label for="nama_barang">Nama Barang:</label>
			<input type="text" name="nama_barang" id="nama_barang" required>
		</li>

		<li>
			<label for="harga">Harga:</label>
			<input type="number" name="harga" id="harga" required>
		</li>

		<li>
			<label for="berat">Berat:</label>
			<input type="number" name="Berat" id="berat" required>
		</li>

		<li>
			<label for="kemasan">Kemasan</label>
			<input type="text" name="kemasan" id="kemasan" required>
		</li>

		<li>
			<label for="tanggal">Tanggal</label>
			<input type="date" name="tanggal" id="tanggal" required>
		</li>

		<li>
			<label for="stok">Stok</label>
			<input type="text" name="stok" id="stok" required>
		</li>

		<li>
			<label for="gambar">Gambar</label>
			<input type="text" name="gambar" id="gambar">
		</li>

		<button type="submit" name="sumbit">Tambah Data</button>
	</ul>
	</form>

</body>
</html>