<?php 
function helloWorld(){
    return "Texte à afficher";
}
?>

<?php 
function quiEstLeMeilleurProf(){
    return "Mon super formateur de dev web";
}

echo quiEstLeMeilleurProf();
?>

<?php
function jeRetourneMonArgument($argument){
    return $argument;
}
echo jeRetourneMonArgument(123);
?>


<?php
function concatenation($argument1, $argument2) {
    return $argument1 . $argument2;
}
echo concatenation("Kingsley", "Coman");
?>

<?php
function concatenationAvecEspace($argument1, $argument2) {
    return $argument1 ." ". $argument2;
}
echo concatenationAvecEspace("Manuel", "Neuer");
?>