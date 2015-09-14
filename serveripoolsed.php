<?php

$eesnimi = 'Rait';
$perekonnanimi = 'Raak';
$vanus = 25;
$nimi_algab_vokaaliga = False;

$isik = $eesnimi.' '.$perekonnanimi.' '."($vanus)";

echo $isik;

if ($nimi_algab_vokaaliga == False) {
    echo "<br>Nimi ei alga vokaaliga";
}


?>