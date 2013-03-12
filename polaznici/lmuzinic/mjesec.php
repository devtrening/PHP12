<?php

$mjesec = "1";

if ($mjesec == 1) {
	echo "Sijecanj";
} else if ($mjesec == 2) {
	echo "Veljaca";
} else if ($mjesec == 3) {
	echo "Ozujak";
} else {
	echo "To nije mjesec!";
}


switch ($mjesec) {
	case 1:
		echo "Sijecanj";
		break;
	case 2:
		echo "Veljaca";
		break;
	case 3:
		echo "Ozujak";
		break;
	default:
		echo "To nije mjesec!";
		break;
}

?>