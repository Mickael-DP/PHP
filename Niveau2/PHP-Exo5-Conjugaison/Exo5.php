<?php

function conjuguaison($verbe){
    echo "<p> Verbe: ".$verbe."</p>";

    $verbeStart = rtrim($verbe,"er");

    if (strlen($verbe) <=15 && substr($verbe,-2) === "er"){
        echo "Je ".$verbeStart."e <br>";
        echo "Tu ".$verbeStart."es <br>";
        echo "Il ".$verbeStart."e <br>";
        if (substr($verbe,-3) === "ger"){
            echo "Nous ".$verbeStart."eons <br>";
            echo "Vous ".$verbeStart."ez <br>";
            echo "Ils ".$verbeStart."ent <br>";
        } else {
            echo "Nous ".$verbeStart."ons <br>";
            echo "Vous ".$verbeStart."ez <br>";
            echo "Ils ".$verbeStart."ent <br>";
        }
    }
}

conjuguaison("programmer");
conjuguaison("coder"); 
conjuguaison("manger");
conjuguaison("nager"); 
?>