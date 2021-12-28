<?php 

// $mahasiswa = [["Muhamad Luffi Dwi Daliana", "160511052", "muhammadluffydwi@gmail.com", "Teknik Informatika"],
// 				["Muhamad Irwan", "160511050", "irwan@gmail.com", "Teknik Informatika"],
// 				["Mohamad Irfan Manaf", "160511040", "irfan@gmail.com", "Teknik Informatika"]
// ];

//array Associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri

$mahasiswa = [
			 ["nama" => "Muhamad Luffi Dwi Daliana", 
			  "nim" => "160511052", 
			  "email" => "muhammadluffydwi@gmail.com", 
			  "jurusan" => "Teknik Informatika",
			  "gambar" => "luffi.jpg"
			],

			  ["nama" => "Muhamad Irwan", 
			  "nim" => "160511003", 
			  "email" => "irwan@gmail.com", 
			  "jurusan" => "Teknik Informatika",
			  "gambar" => "irwan.jpg"
			]
];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs): ?>
<ul>
	<li>
		<img src="img/<?=$mhs['gambar'];  ?>" width="100px">
	</li>
	<li><?=$mhs['nama'] ?></li>
	<li><?=$mhs['nim'] ?></li>
	<li><?=$mhs['email'] ?></li>
	<li><?=$mhs['jurusan'] ?></li>

</ul>
<?php endforeach; ?>

</body>
</html>