<?php

	/*Funkcija koja vraca dan u tjednu.*/

	$dan = 2;

	function dan($dan) {

		switch($dan) {
		
			case 1: 
				return "Ponedjeljak";
				break;
				
			case 2: 
				return "Utorak";
				break;
				
			case 3: 
				return "Srijeda";
				break;
				
			case 4: 
				return "Cetvrtak";
				break;
				
			case 5: 
				return "Petak";
				break;
				
			case 6: 
				return "Subota";
				break;
				
			case 7: 
				return "Nedjelja";
				break;
				
			default: 
				return "Error!";
				break;
		
		}
	
	}
	
	echo dan($dan);

?>