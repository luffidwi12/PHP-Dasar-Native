<?php 

// $x = 0;
// $y = 5;
// $n = 2;
// for($i = 0; $i<$n; $i++){
// 	$x = $x + $y;
// 	echo $x - $y;
// 	echo $i + 1;
// }

// $a = 1;
// $n = 5;

// for($i=0; $i<$n; $i++){
// 	echo "Nilai 2:".$a++;

// }

 
// for($i=1; $i<=5; $i++){
// 	echo $i;
// 	for($j=1 $j<$i; $j++){
// 		echo $i;
// 	}
// }

// $x = 10;
// $y = 14;

// $a = $x;
// $x = $y;

// $y = $a;

// echo $x;
// echo $y;


// $array = [8,7,9];

// for($i=1; $i < count($array); $i++){
// 	for($j = count($array)-1; $j>=$i; $j--){
// 		if($array[$j] > $array[$j-1]){
// 			$temp = $array[$j];
// 			$array[$j] = $array[$j-1];
// 			$array[$j-1] = $temp;
// 		}
// 	}
// 	print_r($array);
// }

$array = [40,38,44,50,45];
	$rata2 = array_sum($array)/count($array);
	foreach($array as $key => $value){
		if($value > $rata2) {
			$str = "IDEAL";
		}else{
			$str = "KURANG IDEAL";
		}
		echo 'siswa ke ['.$key.'] : Berat '.$value.' adalah = '.$str. '<br>';
	}


 ?>

