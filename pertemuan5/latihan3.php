<?php 
//array numerik

$mahasiswa = [["Muhamad Luffi Dwi Daliana", "160511052", "Teknik Informatika", "muhammadluffydwi@gmail.com"],
				["Muhamad Irwan","160511003","Teknik Informatika","irwan@gmail.com"],
				["Mohamad Irfan Manaf","160511002","Teknik Informatika","irfan@gmail.com"]
			
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
 			<li>Nama: <?= $mhs[0] ?></li>
 			<li>NIM: <?= $mhs[1] ?></li>
 			<li>Jurusan: <?= $mhs[2] ?></li>
 			<li>Email: <?= $mhs[3] ?></li>
 		</ul>
 	<?php endforeach; ?>
 
 </body>
 </html>