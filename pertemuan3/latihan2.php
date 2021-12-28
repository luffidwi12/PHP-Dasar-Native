<?php 

//if else
//if else if else
//ternary
//switch

// $x = 10;
// if($x < 20 ){
// 	echo "benar";
// }else{
// 	echo "salah";
// }

// $j = 20;
// if($j < 20){
// 	echo "benar";
// }else if($j == 20){
// 	echo "bingo!";
// }else{
// 	echo "salah";
// }

 ?>

  <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 2</title>
 	<style type="text/css">
 		.warna-baris{
 			background-color: silver;
 		}
 	</style>
 </head>
 <body>
 	<table border="1" cellpadding="10" cellspacing="0">
 		<?php for($i = 1; $i <= 5; $i++) : ?>
 			<?php if($i % 2 == 0): ?>
 			<tr class="warna-baris">
 			<?php else: ?>
 				<tr>
 			<?php endif; ?>
 				<?php for($j = 1; $j <= 5; $j++) : ?>
 					<td><?php echo "$i,$j"; ?></td>
 				<?php endfor; ?>
 			</tr>
 		<?php endfor; ?>
 	</table>

 </body>
 </html>