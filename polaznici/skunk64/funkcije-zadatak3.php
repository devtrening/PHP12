<?php

	/*Funkcija koja vraca mjesec u godini.*/

	$mjesec = 2;

	function mjesec($mjesec) {

		switch($mjesec) {
	
		case 1: 
			return "Sijecanj";
			break;
			
		case 2: 
			return "Veljaca";
			break;
			
		case 3: 
			return "Ozujak";
			break;
			
		case 4: 
			return "Travanj";
			break;
			
		case 5: 
			return "Svibanj";
			break;
			
		case 6: 
			return "Lipanj";
			break;
			
		case 7: 
			return "Srpanj";
			break;
			
		case 8: 
			return "Kolovoz";
			break;
			
		case 9: 
			return "Rujan";
			break;
			
		case 10: 
			return "Listopad";
			break;
			
		case 11: 
			return "Studeni";
			break;
			
		case 12: 
			return "Prosinac";
			break;
			
		default: 
			return "Error!";
			break;
	
		}
	
	}
	
	echo mjesec($mjesec);

?>