<?php

function premierElementTableau($array = []){

    if (empty($array)) {
        return "null";
    } else{
        return $array[0];
    }
}
echo "<p>" . premierElementTableau($array = []) . "</p>";
echo "<p>" . premierElementTableau($array = [4,6,5]) . "</p>";

function dernierElementTableau($array = []){
    return end($array);
}

echo "<p>" . dernierElementTableau($array = [4,6,5]) . "</p>";


function plusGrand($array = []){
    return max($array);
}

echo "<p>" . plusGrand($array = [4,6,5]) . "</p>";


function plusPetit($array = []){
    return min($array);
}

echo "<p>" . plusPetit($array = [4,6,5]) . "</p>";

?>