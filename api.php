<?php

$fail = 'data.csv';
if(file_exists($fail)) {

    $faill = fopen($fail, 'r');
    $andmed = [];
    while (($row = fgetcsv($faill)) !== false) {
        $andmed[] = explode(';', $row[0]);
    }
    $json = json_encode($andmed);
    echo $json;
    fclose($faill);

}
else {
    echo 'Dokumenti ei leitud! Luuakse uus dokument.';
   $faill= fopen($fail,'w');
    file_put_contents($fail,"test;test@khk.ee\ntest2;test2@khk.ee\n");
    fclose($faill);
}


?>
