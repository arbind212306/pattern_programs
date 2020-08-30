<?php

/*
 * 
 *     1
 *    1 2
 *   1   3
 *	1     4
 * 1 2 3 4 5
 *
 */

function pattern($n){
	$space = 4;
	for($i=1; $i<=$n; $i++){
		for($k=1; $k<=$space; $k++){
			echo str_repeat("&nbsp", 2);
		}
		for($j=1; $j<=$i; $j++){
			if(($i >= 3 && $i <= $n-1) && ($j != 1) && ($j < $i)){
				echo str_repeat("&nbsp", 4);
			}else{
				echo $j.str_repeat("&nbsp", 2);
			}
		}
		$space--;
		echo "<br>";
	}
}

pattern(5);