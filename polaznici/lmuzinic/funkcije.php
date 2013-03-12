<?php
include('info.php');

function potencija($broj, $potencija = 2) {

	// vaš kod
	$rezultat = 1;
	for ($brojMnozenja = 1; $brojMnozenja <= $potencija; $brojMnozenja ++) {
		$rezultat *= $broj;
	}


	return $rezultat;
}

function izracunajPorez() {

}
?>