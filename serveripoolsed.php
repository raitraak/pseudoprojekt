<?php

$eesnimi = 'Rait';
$perenimi = 'Raak';
$vanus = 25;
$isik = $eesnimi.' '.$perenimi.' '."($vanus)";

echo $isik.'<br>';

if ($eesnimi[0] == 'A')
{

    echo 'Nimi algab vokaaliga';
}
elseif ($eesnimi[0] == 'e')
{

    echo 'Nimi algab vokaaliga';
}

elseif ($eesnimi[0] == 'i')
{

    echo 'Nimi algab vokaaliga';
}
elseif ($eesnimi[0] == 'o')
{

    echo 'Nimi algab vokaaliga';
}

elseif ($eesnimi[0] == 'u')
{

    echo 'Nimi algab vokaaliga';
}

elseif ($eesnimi[0] == 'ü')
{

    echo 'Nimi algab vokaaliga';
}

else {
    echo 'Nimi ei alga vokaaliga';
}
?>
