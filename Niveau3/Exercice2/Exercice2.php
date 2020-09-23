<?php
//// 1. Créer et initialiser un tableau $notes avec les valeurs suivantes :

$tabnote =[
    "Roger" => 12,
    "Monica" => 16,
    "Najat" => 15,
];

var_dump($tabnote);

//// 2. Ajouter au tableau la note 10 pour l’étudiant "Anton".

$tabnote["Anton"] = 10;
print_r($tabnote);

//// 3. Supprimer la note de l’étudiante "Monica".

unset($tabnote["Monica"]);
print_r($tabnote);

/// 4. Déterminer la note maximale et la note minimale du groupe.
function maximum($arr){
    $max = 0;
    foreach ($arr as $elt){
        if ($elt > $max){
            $max = $elt;
        }
    }
    return $max;
}

function minimum($arr){
    $min = 20;
    foreach ($arr as $elt){
        if($elt < $min){
            $min = $elt;
        }
    }
    return $min;
}

echo "<p> la note max du tableau est: " . maximum($tabnote) . "</p>";
echo "<p> la note min du tableau est: " . minimum($tabnote) . "</p>";

//// 5. Afficher le tableau après l'avoir trié par ordre alphabétique.

ksort ($tabnote);
print_r($tabnote);

//// 6. Classer les étudiants par ordre de mérite (notes décroissantes) et afficher le tableau.

arsort($tabnote);
print_r($tabnote);

//// 7. Déterminer la moyenne de la classe.

function MoyenneNote($arr){
    $somme = 0;
    foreach($arr as $elt){
        $somme += $elt;
    }
    $moyenne = $somme / count($arr);
    return $moyenne;
}

echo "<p> La moyenne de la classe est: " . MoyenneNote($tabnote) . "</p>";






?>