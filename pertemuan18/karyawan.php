<?php 
require 'function.php';

//ambil data karyawan
$data_karyawan = query("SELECT * FROM data_karyawan");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
</head>
<body>

	<h1>Data Karyawan</h1>
	<a href="tambah_karyawan.php">Tambah Data Karyawan</a>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>Nama Karyawan</th>
			<th>Jabatan</th>
			<th>Aksi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach($data_karyawan as $kry) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $kry['nik']; ?></td>
				<td><?= $kry['nama_karyawan']; ?></td>
				<td><?= $kry['jabatan'];  ?></td>

				<td>
					<a href="ubah_karyawan.php?id=<?= $kry["id_karyawan"]; ?>">Ubah</a>
					<a href="hapuskar.php?id=<?= $kry["id_karyawan"]; ?>">hapus</a>
				</td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	</table>

</body>
</html>