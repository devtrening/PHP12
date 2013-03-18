<?php
function danutjednu ($broj) {

	switch ($broj) {
		case 0:
			return "Ponedjeljak";
			break;
		case 1:
			return "Utorak";
			break;
		case 2:
			return "Srijeda";
			break;
		case 3:
			return "Cetvrtak";
			break;
		case 4:
			return "Petak";
			break;
		case 5:
			return "Subota";
			break;
		case 6:
			return "Nedjelja";
			break;
		
		case 7:
			break;
			default: echo "To nije mjesec";
		}
}
function mjesec($broj) {

	switch ($broj) {
		case 1:
			return "Siječanj";
			break;
		case 2:
			return "Veljača";
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
			default: echo "To nije mjesec";
		}
}
?>