<?php 
require 'function.php';

//ambil data dari url
$id = $_GET['id'];

//query data barang berdasarkan id
$brg = query("SELECT * FROM data_barang WHERE id = $id")[0];

//cek apkah tombol submit sudah di tekan
if(isset($_POST['submit'])){

	//cek apakah data berhasil diubah atau tidak
	if(ubah($_POST) > 0){
		echo "<script>
				alert('Data Barang Berhasil Di Ubah!');
				document.location.href = 'index.php';
		</script>";
	}else{
		echo "<script>
				alert('Data Barang Galal Di Ubah!');
				document.location.href = 'index.php';
		</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Barang</title>
</head>
<body>

	<h1>Ubah Data Barang</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $brg['id']; ?>">
		<input type="hidden" name="gambarLama" value="<?= $brg['gambar']; ?>">
		<ul>
			<li>
				<label for="supplier">Supplier</label>
				<input type="text" name="supplier" id="supplier" required value="<?= $brg['supplier'];  ?>">
			</li>

			<li>
				<label for="nama_barang">Nama Barang</label>
				<input type="text" name="nama_barang" id="nama_barang" required value="<?= $brg['nama_barang'];  ?>">
			</li>

			<li>
				<label for="harga">Harga</label>
				<input type="number" name="harga" id="harga" required value="<?= $brg['harga'];  ?>">
			</li>

			<li>
				<label for="berat">Berat</label>
				<input type="number" name="berat" id="berat" required value="<?= $brg['berat'];  ?>">
			</li>

			<li>
				<label for="kemasan">Kemasan</label>
				<input type="text" name="kemasan" id="kemasan" required value="<?= $brg['kemasan'];  ?>">
			</li>

			<li>
				<label for="tanggal">Tanggal</label>
				<input type="date" name="tanggal" id="tanggal" required value="<?= $brg['tanggal'];  ?>">
			</li>

			<li>
				<label for="stok">Stok</label>
				<input type="text" name="stok" id="stok" required value="<?= $brg['stok'];  ?>">
			</li>

			<li>
				<label for="gambar">Gambar</label> <br>
				<img src="img/<?= $brg['gambar']; ?>" width="100px"> <br>
				<input type="file" name="gambar" id="gambar" >
			</li>
			<li>
			<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>