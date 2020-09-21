<?php

function fibonacci($suite){

    if ($suite > 0 && is_int($suite)) {
        $n1 = 0;
        $n2 = 1;
        echo $n1 . ' ' . $n2;

        for($i = 0; $i <($suite-1); $i++){
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;

            echo " ".$n3;
        }
    }else {
        echo "Votre nombre n'est pas valide";
    }
 
    echo "<p> En " . $suite . " mois, si chaque couple de lapins engendre tous les mois 
    un nouveau couple à compter du second mois de son existence, 
    on obtient ". $n3 . " couples de lapins.";

}

fibonacci(12);

?>