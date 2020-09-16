<?php

function verificationPassword ($string) {
    if (strlen($string) >= 8) {
        return "true"; 
    } else {
        return "false";
    }
}

echo "<p>" . verificationPassword("ldl23") . "</p>";
echo "<p>" . verificationPassword("ldl23dzr") . "</p>";



function verificationPasswordEvolution($string) {
    $chiffre ="/[0-9]/";

    if (strlen($string) > 8 && strtolower($string) != $string 
    && preg_match($chiffre, $string)) {
        return "true"; 
    } else {
        return "false";
    }
}

echo "<p>" . verificationPasswordEvolution("Mickael06") . "</p>";
echo "<p>" . verificationPasswordEvolution("mickael") . "</p>";

function capital($string){
    switch($string){
        case "France":
            return "Paris";
        break;
        case "Allemagne":
            return "Berlin";
        break;
        case "Italie":
            return "Rome";
        break;
        case "Maroc":
            return "Rabat";
        break;
        case "Espagne":
            return "Madrid";
        break;
        case "Portugal":
            return "Lisbonne";
        break;
        case "Angleterre":
            return "Londre";
        break;
        default:
            return "Inconnu";
    break;
    }
}

echo "<p>" . capital("Italie") . "</p>";
echo "<p>" . capital("Pologne") . "</p>";

function listHTML ($string, $array){
    echo "<h2>" . $string . "</h2>";
    echo "<ul>";

    for ($i = 0; $i < count($array); $i++) {
      echo "<li>" . $array [$i] . "</li>";
    }
    echo "</ul>";

    if($string == null) {
        return "null";
    }

    if($array == null) {
        return "null";
    }
};

echo listHTML ("Capitale", ["Paris", "Berlin", "Moscou"]);
echo listHTML ("",[]);

function remplacerLesLettres($string){

    for ($i = 0; $i < strlen($string); $i++){
        if ($string[$i] == "e"){
            $string[$i] = "3";
        } elseif ($string[$i] == "i"){
            $string[$i] = "1";
        } elseif ($string[$i] == "o"){
            $string[$i] = "0";
        }
    }
    return $string;
};

echo "<p>" . remplacerLesLettres("Bonjour les amis") . "</p>";
echo "<p>" . remplacerLesLettres("La programmation Web est trop cool") . "</p>";

function quelleAnnee(){
    return date ("Y");
}

echo "<p>" . quelleAnnee() . "</p>";

function quelleDate(){
    return date("d/m/Y");
}

echo "<p>" . quelleDate() . "</p>";
?>