<?php
	$arr = [1 => 'Понедельник ', 2 => 'Вторник ', 3 => 'Среда ', 4 => 'Четверг ', 5 => 'Пятница ', 6 => 'Суббота ', 7 => 'Воскресенье'];
	foreach ($arr as $key => $elem) {
		if ($key == 6 or $key == 7){
			echo '<b>'. $elem .'</strong>';
		} else{
			echo $elem;
		}
	}
?>