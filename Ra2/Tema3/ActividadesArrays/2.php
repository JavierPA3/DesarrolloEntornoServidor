<?php 

$numbers = array(1, 2, 3, 4, 5);

$aCuadrado = array_map(function ($n) {
    return $n*$n;
    }, $numbers);
        
print_r($aCuadrado);