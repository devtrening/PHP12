<?php

function potencija($broj, $potencija) {

$rezultat = 1;
for ($brojMnozenja = 1; $brojMnozenja <= $potencija; $brojMnozenja +=1) 
{$rezultat *= $broj;
}

return $rezultat;
}

?>