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
	
	$gambar = upload();
	if ( !$gambar ) {
		return false;
	}

	//query insert data
	$query = "INSERT INTO data_barang VALUES('','$supplier','$nama_barang','$harga','$berat','$kemasan','$tanggal','$stok','$gambar')";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function upload(){

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name']; 

	//cek apakah tidak ada gambar yang di upload
	if($error === 4){
		echo "<script>
				alert('pilih gambar terlebih dahulu');
		</script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
		</script>";
		return false;
	}

	//cek jika ukuran nya terlalu besar
	if($ukuranFile > 1000000){
		echo "<script>
				alert('ukuran gambar terlalu besar!');
		</script>";
		return false;
	}

	//lolos pengecekan gambar siap diupload
	//generate nama gambar baru 
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar; 
	move_uploaded_file($tmpName,'img/' . $namaFileBaru);

	return $namaFileBaru;
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
	$gambarLama = htmlspecialchars($data['gambarLama']);

	//cek apakah user pilih gambar baru atau tidak
	if($_FILES['gambar']['error'] === 4 ){
		$gambar=$gambarLama;
	}else{
		$gambar = upload();
	}
	

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

function cari($keyword){
	$query = "SELECT * FROM data_barang
				WHERE 
				supplier LIKE '%$keyword%' OR
				nama_barang LIKE '%$keyword%' OR
				harga LIKE '%keyword%' OR
				berat LIKE '%keyword%' OR
				kemasan LIKE '%keyword%' OR
				tanggal LIKE '%keyword%'
			";
			return query($query);
}



 ?>

