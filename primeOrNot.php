<?php

function isPrime($var)
{
   
    if ($var <= 1) {
    }

    for ($i = 2; $i <= $var; $i++) {
        if ($var % $i === 0) {
            return false;
        }
    }

    return true;
}

if ($var !== null) {
    if (isPrime($var)) {
        echo "$var est un nombre premier.";
    } else {
        echo "$var n'est pas un nombre premier.";
    }
} 
     
isPrime($var);






?>