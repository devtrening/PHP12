<?php

	$broj = 7;
	$potencija = 3;
	$rezultat = 1;

	for($i=0; $i<$potencija; $i++) {
		$rezultat *= $broj;
	}
	
	echo $broj . "^" . $potencija . " = " . $rezultat;

?>