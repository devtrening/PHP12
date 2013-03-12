<?php
$mjesec=13;
if ($mjesec==1){ 
	echo "sijecanj";}

elseif ($mjesec==2){ 
	echo "veljača";
}
elseif ($mjesec==3){ 
	echo "ožujak";
}
elseif ($mjesec==4){
	echo "travanj";
}
elseif ($mjesec==5){ 
	echo "svibanj";
}
elseif ($mjesec==6){
	echo "lipanj";
}
elseif ($mjesec==7){ 
	echo "srpanj";
}
elseif ($mjesec==8){ 
	echo "kolovoz";
}
elseif ($mjesec==9){ 
	echo "rujan";
}
elseif ($mjesec==10){ 
	echo "listopad";
}
elseif ($mjesec==11){ 
	echo "studeni";
}
elseif ($mjesec==12){ 
	echo "prosinac";
} else {
	echo "To nije mjesec!";
	}
	
switch ($mjesec) {
	case 1:
		echo "Siječanj";
		break;
	case 2:
		echo "Veljača";
		break;
	case 3:
		echo "Ozujak";
		break;
	case 4:
		echo "Travanj";
		break;
	case 5:
		echo "Svibanj";
		break;
	case 6:
		echo "Lipanj";
		break;
	case 7:
		echo "Srpanj";
		break;
	case 8:
		echo "Kolovoz";
		break;
	case 9:
		echo "Rujan";
		break;
	case 10:
		echo "Listopad";
		break;
	case 11:
		echo "Studeni";
		break;
	case 12:
		echo "Prosinac";
		break;
		default: echo "To nije mjesec";
		}
?>
