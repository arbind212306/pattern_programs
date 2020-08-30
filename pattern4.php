<?php

/*
 * 1
 * 0 1
 * 1 0 1
 * 0 1 0 1
 * 1 0 1 0 1
 */

function pattern($n){
	for($i=1; $i<=$n; $i++){
		for($j=1; $j<=$i; $j++){
			if((($i+$j)%2) != 0){
				echo '0'.' ';
			}else{
				echo '1'.' ';
			}
		}
		echo "<br>";
	}
}

pattern(5);