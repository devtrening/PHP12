<?php 
$duzina=3.5;
$prikolica=true;
if ($duzina <=1.2 ){
 
	$cijena=15;
	}
elseif ($duzina >1.20 && $duzina <=3.5){
	$cijena=23;
	}
else if ($duzina > 3.5){
$cijena=31;
}

if ($prikolica) {
$cijena = $cijena +9;
}





echo $cijena;
?>