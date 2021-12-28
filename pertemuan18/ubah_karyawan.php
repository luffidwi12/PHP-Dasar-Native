<?php 

require 'function.php';

//ambil data dari url
$id = $_GET['id'];
var_dump($id);

//query data barang berdasarkan id
$kry = query("SELECT * FROM data_karyawan WHERE id_karyawan = $id")[0];

//cek apakah tombol submit sudah di tekan
if(isset($_POST['submit'])){

	//cek apakah data berhasil diubah atau tidak
	if(ubah_karyawan($_POST) > 0){
		echo "<script>
				alert('Data Karyawan Berhasil Diubah!');
				document.location.href = 'karyawan.php';
		</script>";
	}else{
		echo "<script>
				alert('Data Karyawan Gagal Diubah!');
				document.location.href = 'ubah_karyawan.php';
		</script>";
	}
}





 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Karyawan</title>
</head>
<body>
	<h1>Ubah Data Karyawan</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $key['id_karyawan']; ?>">
	<ul>
		<li>
			<label for="nik">NIK</label>
			<input type="text" name="nik" id="nik" required value="<?= $kry['nik']; ?>">
		</li>

		<li>
			<label for="nama_karyawan">Nama Karyawan</label>
			<input type="text" name="nama_karyawan" id="nama_karyawan" required value="<?= $kry['nama_karyawan']; ?>">
		</li>

		<li>
			<label form="jabatan">Jabatan</label>
			<input type="text" name="jabatan" id="jabatan" required value="<?= $kry['jabatan']; ?>">	
		</li>
		<li>
			<button type="submit" name="submit">Ubah Data</button>
		</li>
	</ul>
		
	</form>

</body>
</html>