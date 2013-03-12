<?php

function potencija($p_broj, $p_potencija = 2) {
	$rezultat = 1;
	for ($brojMnozenja = 1; $brojMnozenja <= $p_potencija; $brojMnozenja ++) {
		$rezultat *= $p_broj;
	}

	return $rezultat;
}

function dan($p_dan) {
	switch ($p_dan) {
		case 0:
			return "ponedjeljak";
			break;
		case 1:
			return "utorak";
			break;
		case 2:
			return "srijeda";
			break;
		case 3:
			return "cetvrtak";
			break;
		case 4:
			return "petak";
			break;
		case 5:
			return "subota";
			break;
		case 6:
			return "nedjelja";
			break;
		default:
			return false;
			break;
	}
}

function mjesec($p_mjesec) {
	switch ($p_mjesec) {
		case 1:
			return "sijecanj";
			break;
		case 2:
			return "veljaca";
			break;
		case 3:
			return "ozujak";
			break;
		case 4:
			return "travanj";
			break;
		case 5:
			return "svibanj";
			break;
		case 6:
			return "lipanj";
			break;
		case 7:
			return "srpanj";
			break;
		case 8:
			return "kolovoz";
			break;
		case 9:
			return "rujan";
			break;
		case 10:
			return "listopad";
			break;
		case 11:
			return "studeni";
			break;
		case 12:
			return "prosinac";
			break;
		default:
			return false;
			break;
	}
}

function faktorijele($p_broj) {
	$rezultat = 1;
	while ($p_broj > 1) {
		$rezultat *= $p_broj;
		$p_broj -= 1;
	}

	return $rezultat;
}
