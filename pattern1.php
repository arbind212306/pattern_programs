<?php

/*
 * 1
 * 1 2
 * 1 2 3
 * 1 2 3 4
 * 1 2 3 4 5
 */

function pattern($n){
	for($i=1; $i<=$n; $i++){
		for($j=1; $j<=$i; $j++){
			echo $j.' ';
		}
		echo "\n";
	}
}

pattern(5);