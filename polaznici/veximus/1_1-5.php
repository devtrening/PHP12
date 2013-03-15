<?php
$a=5;
$b=7;
$pov_pravokutnik=$a*$b;
        echo "Povrsina pravokutnika sirine " . $b . " cm i duzine " . $b . " cm iznosi " . $pov_pravokutnik . "cm kvadratnih.";
$pov_kvadrat=$a*$a;
$razlika_pov=$pov_pravokutnik - $pov_kvadrat;
        echo "<br>Povrsina kvadrata je " . $razlika_pov . "cm kvadratnih manja od povrsine pravokutnika.<br>";

$c=135;
if ($c < $pov_pravokutnik) {
        echo "Manja je.";
}       elseif ($c == $pov_pravokutnik) {
        echo "Jednaka je.";
}
else { 
echo "Veca je.<br>";
}

$x = 4;
$y = 8;
$pov_pravokutnik1 = $x * $y;
$razlika = $b - $a;
$razlika1 = $y - $x;
if ($pov_pravokutnik1 <= $pov_pravokutnik && $razlika1 <= $razlika) {
        echo "Nema frke. Pravokutnik mozemo smjestiti";
}       
else {
        echo "Nazalost nece ici, kako god da ga okrenes.";
}
?>      