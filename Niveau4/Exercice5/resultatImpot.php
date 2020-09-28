<?php
include ("impot.php");

if(isset ($_GET["submit"])){

    $nom = $_GET["nom"];
    $revenu = $_GET["revenu"];

    $personne = new impot($nom,$revenu);

    $personne->calculImpot();
    $personne->afficheImpot();
}


?>