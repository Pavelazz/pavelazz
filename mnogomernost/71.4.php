<?php
	$arr = [[1, 2], [3, 4], [5, 6], [7, 8]];
	
	for ($i = 0, $k = 1; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] = $k++;
		}
	}
	
	var_dump($arr);
?>