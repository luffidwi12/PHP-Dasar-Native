<!-- <?php 
//pengulangan
//for
//while
//do.. while
//foreach : pengulangan khusus array

// for($i = 0; $i < 5; $i++){
// 	echo "Hello World! <br>";
// }

// $i = 0;
// while( $i < 5 ){
// 	echo "Hello World! <br>";
// $i++;
// }

//Operator
//perbandingan
// <, >, <=, >=, ==, !=

//identitas
//===, !==

//logika
// &&, ||, !


$i = 0;
do{
	echo "Hello World! <br>";
$i++;
}while($i < 5);

 ?> -->

<!--  <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 1</title>
 </head>
 <body>
 	<table border="1" cellpadding="10" cellspacing="0">
 		<?php 
 			for($i = 1; $i <= 3; $i++){
 				echo "<tr>";
 				for($j = 1; $j <=5; $j++){
 					echo "<td>$i,$j</td>";
 				}
 				echo "</tr>";
 			}

 		 ?>
 	</table>

 </body>

 </html> -->



  <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 1</title>
 </head>
 <body>
 	<table border="1" cellpadding="10" cellspacing="0">
 		<?php for($i = 1; $i <= 3; $i++) : ?>
 			<tr>
 				<?php for($j = 1; $j <= 5; $j++) : ?>
 					<td><?php echo "$i,$j"; ?></td>
 				<?php endfor; ?>
 			</tr>
 		<?php endfor; ?>
 	</table>

 </body>
 </html>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 1</title>
 </head>
 <body>
 	<table border="1" cellpadding="10" cellspacing="0">
 		<?php $i = 1; ?>
 		<?php while( $i <= 3 ) { ?>
 			<tr>
 				<?php $j = 1; ?>
 				<?php while( $j <= 5 ) { ?>
 					<td><?php echo "$i,$j"; ?></td>
 					<?php $j++ ?>
 				<?php } ?>
 			</tr>
 			<?php $i++ ?>
 		<?php } ?>
 	</table>

 </body>
 </html>

