<?php
$mjesec = 6;

if ($mjesec==1) {
	echo "siječanj";
} else if ($mjesec==2) {echo "veljača";}
else if
($mjesec==3) echo "ožujak";
else if
($mjesec==4) echo "travanj";
else if($mjesec==5) echo "svibanj";
else if ($mjesec==6) echo "lipanj";
else if ($mjesec==7) echo "srpanj";
else if ($mjesec==8) echo "kolovoz";
else if($mjesec==9) echo "rujan";
else if
 ($mjesec==10) echo "listopad";
else if($mjesec==11) echo "studeni";
else if ($mjesec==12) echo "prosinac";

switch ($mjesec) {
	case 1:
		echo "Siječanj";
		break;
	case 2;
		echo "Veljača";
		break;
	default:
	echo "To nije mjesec";
	break;
	}



?>


