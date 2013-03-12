<?php



$duzina=3.5;
$prikolica=true;

if($duzina < 1.2 && $prikolica=false){
echo "Molim vas platite 15kn";}

else if($duzina < 1.2 && $prikolica=true){
echo "Molim vas platite 24kn";}





else if($duzina > 1.2 && $duzina <= 3.5 && $prikolica=false){
echo "Molim vas platite 23kn";}
else if($duzina > 1.2 && $duzina <= 3.5 && $prikolica=true){
echo "Molim vas paltite 32kn";
}

else if($duzina >3.5 && $prikolica=false){
echo"Molim vas platite 31 kn";}

else if($duzina >3.5 && $prikolica=true){
echo"Molim vas platite 40 kn";}

















?>