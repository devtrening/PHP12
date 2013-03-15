<?php
	
	$duzina = 3.6;
	$prikolica = true;
	$racun = 0.0;
	
	if($duzina <= 1.2) {
	
		$racun += 15;
	
	}
	
	else if($duzina > 1.2 && $duzina <= 3.5) {
	
		$racun += 23;
	
	}
	
	else {
	
		$racun += 31;
	
	}
	
	if ($prikolica == true) {
	
		$racun += 9;
	
	}
	
	echo "Duzina auta:" . $duzina . "m<br>";
	echo "Prikolica:" . $prikolica . "<br>";
	echo "Racun je: " . $racun . "kn<br>";
	
?>