<?php

$duzina=3.5;
$prikolica=false;
$cijena=0;
$cijena_prikolica=9;

if($duzina < 1.2){
$cijena=15;}

else if($duzina > 1.2 && $duzina <= 3.5){
$cijena=23;}

else if($duzina >3.5){
$cijena=31;
}
 
  if($prikolica==true){
 $cijena=$cijena+9;
 
 
 }
 echo $cijena;

?>