<?php 
//variabel scope/ lingkup variabel
// $x = 10;

// function tampilx(){
// 	global $x;
// 	echo $x;
// }
// tampilx();




//SUPERGLOBAL
//variable global milik PHP
//merupakan Array Associative

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
 	<title>GET</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 	<ul>
 	<?php foreach($mahasiswa as $mhs): ?>
 		<li>
 			<a href="latihan2.php?nama=<?=$mhs["nama"]; ?>&nim=<?=$mhs["nim"]; ?>&email=<?=$mhs["email"]; ?>&jurusan=<?=$mhs["jurusan"]; ?>&gambar=<?=$mhs["gambar"] ?>"><?= $mhs["nama"] ?></a>
 				
 			</li>
 	<?php endforeach; ?>
 	</ul>
 
 </body>
 </html>