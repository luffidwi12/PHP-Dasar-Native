<?php 
require 'function.php';

//cek tombol submit udah di tekan atau belum
if(isset($_POST['submit'])){

	//cek apakah data berhasil ditambahkan atau tidak
	if(tambah_karyawan($_POST) > 0){
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'karyawan.php';
		</script>";
	}else{
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'karyawan.php';
		</script>";
	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Karyawan</title>
</head>
<body>
	<h1>Tambah Data Karyawan</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nik">NIK</label>
				<input type="text" name="nik" id="nik" required>
			</li>

			<li>
				<label for="nama_karyawan">Nama Karyawan</label>
				<input type="text" name="nama_karyawan" id="nama_karyawan" required>
			</li>

			<li>
				<label for="jabatan">Jabatan</label>
				<input type="text" name="jabatan" id="jabatan" required>
			</li>

			<button type="submit" name="submit">Tambah Data</button>

		</ul>
	</form>

</body>
</html>