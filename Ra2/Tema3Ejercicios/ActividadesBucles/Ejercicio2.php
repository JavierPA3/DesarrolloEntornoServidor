<?php
/**
 * Sumar los 3 primeros números pares.
 * 
 * Autor: Javier Postigo Arévalo
 * Fecha: 29/09/2023
 */


$peers = 0;
$cont = 0;
$add_numbers = 0;
define("NUMEROPRIMOSMAX", 3);

while ($cont < NUMEROPRIMOSMAX) {
    $add_numbers = $add_numbers + $peers;
    $cont++;
    $peers = $peers + 2;
}
echo $add_numbers;