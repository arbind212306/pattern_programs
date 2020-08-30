<?php

/*
 * 1 2 3 4 5
 * 2     5
 * 3   5
 * 4 5
 * 5
 */


function pattern($n){
	for($i=1; $i<=$n; $i++){
		for($j=$i; $j<=$n; $j++){
			if(($i>=2 && $i<=$n-1) && ($j != $i) && ($j != $n)){
				echo str_repeat("&nbsp", 3);
			}else{
				echo $j.' ';
			}
		}
		echo "<br>";
	}
}

pattern(5);