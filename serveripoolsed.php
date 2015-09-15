<?php

class isik_klass {
    var $eesnimi = 'Rait';
    var $perenimi = 'Raak';
    var $vanus = '25';
    var $sugu = 'mees';
}

$isik = new isik_klass;

echo $isik->eesnimi.' ';
echo $isik->perenimi.' ';
echo $isik->vanus.' ';
echo $isik->sugu;


?>
