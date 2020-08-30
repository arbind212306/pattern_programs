<?php

/*
 *         1
 *       2 3 2
 *     3 4 5 4 3
 *   4 5 6 7 6 5 4
 * 5 6 7 8 9 8 7 6 5
 **/

function pyramid($n){
	$space = 4;
	$col = 1;
	for($i=1; $i<=$n; $i++){
		for($k=1; $k<=$space; $k++){
			echo str_repeat("&nbsp", 3);
		}
		$val = $i;
		for($j=1; $j<=$col; $j++){
			echo $val.' ';
			if($j < $i){
				$val++;
			}else{
				$val--;
			}
		}

		$col = $col + 2;
		$space--;
		echo "<br>";
	}
}

pyramid(5);