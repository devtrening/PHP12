<?php

$duzina = 3.2;
$prikolica = true;

if ($duzina < 1.2) {
	$cestarina = 15;
} else if ($duzina > 1.2 && $duzina <= 3.5) {
	$cestarina = 23;
} else {
	$cestarina = 31;
}

if ($prikolica) {
	$cestarina = $cestarina + 9;
}

echo $cestarina; 


?>