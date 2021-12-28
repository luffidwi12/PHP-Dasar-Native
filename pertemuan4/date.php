<?php 

//Date
//menampilkan tanggal dengan format tertentu
	//echo date("l, d-M-Y");
	
//time
//UNIX  / Timestamp /EPOCH stamp
// detik yang sudah berlalu sejak 1 januari 1970

// echo date("d M Y", time()-60*60*24*100);	

//mktime
//membuat detik sendiri
//mktime(0,0,0,0,0,0)
//jam,menit,detik,bulan,tanggal,tahun

// echo date("l",mktime(0,0,0,21,8,1998));

//strtotime
echo date("l", strtotime("21 Aug 1998"));
 ?>