<?php

	/*Funkcija koja ispituje je li broj paran ili neparan.*/

	$broj = 4;
	
	function parnepar($broj) {
	
		if($broj % 2 == 0) {
		
			echo "Broj je paran!";
		
		}
		
		else {
		
			echo "Broj je neparan!";
		
		}
	
	}
	
	parnepar($broj);

?>