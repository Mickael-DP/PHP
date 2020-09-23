<?php

$date = date ('d/m/Y h:i:s');

if(!isset($_COOKIE["visite"])){

    $visites = $date;

} else {
    $visites = $_COOKIE["visite"]." - ".$date;
    
}
setcookie('visite', $visites);

?>
  
<?php

if (!isset($_COOKIE["visite"])){
    echo "La première visite est: " . $date ;
} else {

    $liste_visites = explode("-", $_COOKIE['visite']);
    echo "Vous avez consulté cette page " . (count($liste_visites) + 1) . " fois, voici les détails :";
    echo "<ul>";
    foreach ($liste_visites as $elt){
        echo "<li>" . $elt . "</li>";
    }
    echo "</ul>";
}



?>
