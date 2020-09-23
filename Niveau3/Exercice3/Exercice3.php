<?php

$filedoc = "compteur.txt";

if (file_exists($filedoc)){
    $opendoc = fopen ($filedoc, "r");
    $visite = fread ($opendoc, filesize($filedoc));
    fclose($opendoc);
    $visite++;
    $writedoc = fopen($filedoc, "w");
    fwrite($writedoc, $visite);
    fclose($writedoc);

    echo "<p> Le nombre de visite est: " . $visite . "</p>";
} else {

    $doc = fopen($filedoc, "w");
    fwrite($doc, "1");
    fclose($doc);

    echo "<p>Le nombre de visites est : 1 </p>";
   
}
?>

