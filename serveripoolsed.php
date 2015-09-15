<?php

$eesnimi = 'Rait';
$perenimi = 'Raak';
$vanus = '25';
$sugu = 'mees';
$nimi_algab_vokaaliga = False;

$isik = $eesnimi.' '.$perenimi.' '."($vanus)";

echo $isik.'<br>';

if ($nimi_algab_vokaaliga == False)

    echo 'Nimi ei alga vokaaliga';

?>
