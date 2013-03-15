<?php

function potencija($broj, $potencija) {
$broj = 7;
$potencija = 3;
$rezultat = 1;
for($brojMnozenja = 1; $brojMnozenja <= $potencija; $brojMnozenja ++) {
	$rezultat *= $broj;
}
echo $rezultat;
}

potencija();
?>




 
