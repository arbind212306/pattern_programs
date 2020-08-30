<?php

/*
 *  1
 *  1 2
 *  1   3
 *  1     4
 *  1 2 3 4 5
 */

function pattern($n){
	for($i=1; $i<=$n; $i++){
		for($j=1; $j<=$i; $j++){
			if(($i >=3 && $i <= $n-1) && ($j !=1) && ($i != $j)){
				echo str_repeat("&nbsp", 3);
			}else{
				echo $j.' ';
			} 
		}
		echo "<br>";
	}
}

pattern(6);