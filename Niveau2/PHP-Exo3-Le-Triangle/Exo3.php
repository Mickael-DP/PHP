<?php

function display_triangle ($ligne) {

    echo "<p style= \"text-align:center;\">";
    
    for ($i = 0; $i < $ligne; $i++){

        for ($j = 0; $j <= $i; $j++){
            echo "**";
        }
        echo "<br>";
    }
}  

display_triangle (10);

?> 