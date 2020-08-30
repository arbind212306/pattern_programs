<?php

/*
 * 1 2 3 4 5
 * 1 2 3 4
 * 1 2 3
 * 1 2
 * 1
 */

function pattern($n){
	for($i=0; $i<$n; $i++){
		for($j=1; $j<=$n-$i; $j++){
			echo $j.' ';
		}
		echo "\n";
	}
}

pattern(5);