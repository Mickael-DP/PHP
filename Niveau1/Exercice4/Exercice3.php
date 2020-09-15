<?php 

function estIlMajeur ($age)
{ 
    if ($age >=18) {
        return "true";
    } else{
        return "false";
    }
}
echo "<p>" . estIlMajeur(34) . "</p>";

function plusGrand($int1, $int2){
    $max = $int1;

    if ($int2 > $max){
        $max = $int2;
    }

    return $max;
}
echo "<p>" . plusGrand(5, 7) . "</p>";

function plusPetit($int1, $int2){
    $min = $int1;

    if ($int2 < $min){
        $min = $int2;
    }

    return $min;
}
echo "<p>" . plusPetit(5, 7) . "</p>";


function lePlusPetit($int1, $int2, $int3){
    $min = $int1;

    if ($int2 < $min){
        $min = $int2;
    } elseif($int3 < $min){
        $min = $int3;
    }

    return $min;
}
echo "<p>" . lePlusPetit(1, 5, 6) . "</p>";

?>