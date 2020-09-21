<?php

function conjecture($number){

    if ($number > 0 && is_int($number)) {

        while ($number != 1){

            if ($number % 2 == 0){
                $number = $number / 2;
                echo $number . " ";
            } else {
                $number = ($number * 3) + 1;
                echo $number . " ";            
            }
        }

    } else {
        echo("Le nombre choisi est invalide");
    }
}  

echo conjecture(25);

?>