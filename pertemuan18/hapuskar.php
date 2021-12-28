<?php 
require 'function.php';


$id = $_GET['id'];
//cek apakah data berhasil hapus atau tidak
	if(hapuskar($id) > 0){
		echo "<script>
				alert('Data Barang Berhasil Di Hapus!');
				document.location.href = 'index.php';
		</script>";
	}else{
		echo "<script>
				alert('Data Barang Galal Di Hapus!');
				document.location.href = 'karyawan.php';
		</script>";
	}
 ?>