<?php

$broj = 3;
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

echo danutjednu ($broj);
?>