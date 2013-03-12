<?php
function potencija($broj, $potencija) {

$rezultat = 1;
for($brojMnozenja = 1; $brojMnozenja <= $potencija; $brojMnozenja ++) {
	$rezultat *= $broj;
}
return $rezultat;
}

potencija(2, 8);
?>