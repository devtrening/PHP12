<?php

	function potencija($broj, $potencija) {

		$rezultat = 1;

		for($i=0; $i<$potencija; $i++) {
			$rezultat *= $broj;
		}
		
		return $rezultat;
	
	}

?>