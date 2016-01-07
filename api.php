<?php

if(isset($_GET['checkmail'])){
    $mail=$_GET['checkmail'];
    if(checkdnsrr(array_pop(explode("@",$mail)),"MX")){
        exit("Emaili domeen eksisteerib.");
    }
    else{
        exit("Emaili domeeni ei ole olemas.");
    }
}


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
    file_put_contents($fail,"Rait;Raak;test@khk.ee\nJuss;Juhansoo;test2@khk.ee\n");
    fclose($faill);
}


?>
