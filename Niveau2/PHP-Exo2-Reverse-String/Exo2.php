<?php

function reverse_string($text){
    $text = strrev($text);
    echo $text. " ";
} 

reverse_string("abcdef GHI");
?> 