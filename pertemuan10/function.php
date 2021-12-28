<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","stok_barang");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data){
	global $conn;
	$supplier = htmlspecialchars($data['supplier']);
	$nama_barang = htmlspecialchars($data['nama_barang']);
	$harga = htmlspecialchars($data['harga']);
	$berat = htmlspecialchars($data['berat']);
	$kemasan = htmlspecialchars($data['kemasan']);
	$tanggal = htmlspecialchars($data['tanggal']);
	$stok = htmlspecialchars($data['stok']);
	$gambar = htmlspecialchars($data['gambar']);

	//query insert data
	$query = "INSERT INTO data_barang VALUES('','$supplier','$nama_barang','$harga','$berat','$kemasan','$tanggal','$stok','$gambar')";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id = $data['id'];
	$supplier = htmlspecialchars($data['supplier']);
	$nama_barang = htmlspecialchars($data['nama_barang']);
	$harga = htmlspecialchars($data['harga']);
	$berat = htmlspecialchars($data['berat']);
	$kemasan = htmlspecialchars($data['kemasan']);
	$tanggal = htmlspecialchars($data['tanggal']);
	$stok = htmlspecialchars($data['stok']);
	$gambar = htmlspecialchars($data['gambar']);

	//query update data
	$query = "UPDATE data_barang SET
				supplier = '$supplier',
				nama_barang = '$nama_barang',
				harga = '$harga',
				berat = '$berat',
				kemasan = '$kemasan',
				tanggal = '$tanggal',
				stok = '$stok',
				gambar = '$gambar'
				WHERE id = $id
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM data_barang WHERE id = $id");
	return mysqli_affected_rows($conn);
}



 ?>

