<?php

	/*Funkcija iza izracun paktorijela.*/

	$broj = 9;

	function faktorijel($broj) {

		$rezultat = 1;

		for($i=1; $i<=$broj; $i++) {
			$rezultat *= $i;
		}
		
		return $rezultat;
	
	}
	
	echo faktorijel($broj);

?>