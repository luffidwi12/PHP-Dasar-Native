<?php 
require 'function.php';

//ambil data dari tabel data_barang/query dari data_barang
$data_barang = query("SELECT * FROM data_barang");





 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Barang</title>
</head>
<body>

	<h1>Daftar Barang</h1>

	<a href="tambah.php">Tambah Data Barang</a>
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