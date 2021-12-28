<?php 
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>NIM</th>
			<th>EMAIL</th>
			<th>JURUSAN</th>
			<th>GAMBAR</th>
			<th>AKSI</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach($mahasiswa as $row): ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $row['nama']; ?></td>
			<td><?= $row['nim']; ?></td>
			<td><?= $row['email']; ?></td>
			<td><?= $row['jurusan']; ?></td>
			<td><img src="img/<?= $row['gambar']; ?>" width="50"></td>
			<td>
				<a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a>
				<a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin?');">Hapus</a>
			</td>
		</tr>
		<?php $i++ ?>
	<?php endforeach; ?>

	</table>

</body>
</html>