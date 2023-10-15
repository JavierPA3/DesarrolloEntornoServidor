<?php


$aPaises = array(

    array('id' => 'es', 'pais' => 'España', 'Capital' => 'Madrid'),
    array('id' => 'it', 'pais' => 'Italia', 'Capital' => 'Roma'),
    array('id' => 'fr', 'pais' => 'Francia', 'Capital' => 'París'),
);

$nombrePaises = array();
foreach ($aPaises as $pais) {
    $nombrePaises = $pais['pais'];


}

print_r($nombrePaises);

$nombre = array_map(function ($pais) {
return $pais['pais'];
}, $aPaises);

print_r($nombrePaises);