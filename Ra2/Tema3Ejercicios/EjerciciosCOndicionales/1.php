
<?php

/**
 * 
 * 
 * Autor: Javier Postigo
 *   Crea tres variables y ordenalas.
* Fecha: 27/09/2023
 * 
 */

$num1 = 1000;
$num2 = 500;
$num3 = 0;

if ($num1 > $num2 and $num1 > $num3) {
    if ($num2 > $num3) {
        echo "1º ". $num1 ." 2º ". $num2 ." 3º ". $num3;
    }
    else {
        echo "1º ". $num1 ." 2º ". $num3 ." 3º ". $num2;
    }
} else {
    if ($num2 > $num1 and $num2 > $num3)
        if ($num1 > $num3) {
        echo "1º ". $num2 ." 2º ". $num1 ." 3º ". $num3;
        } else {
            echo "1º ". $num2 ." 2º ". $num3 ." 3º ". $num1;
        }
    else {
        if ($num1 > $num2) {
            echo "1º ". $num3 ." 2º ". $num1 ." 3º ". $num2;
    }
        else {
            echo "1º ". $num3 ." 2º ". $num2 ." 3º ". $num1;

        }
}
}