<?php
/**
 * 1. Definir un array que permita almacenar y mostrar la siguiente información.
 *a. Meses del año.
 *b. Tablero para jugar al juego de los barcos.
 *c. Nota de los alumnos de 2o DAW para el módulo DWES.
 *d. Verbos irregulares en inglés.
 *e. Información sobre continentes, países, capitales y banderas.
 * 
 * Autor: Javier Postigo A´revalo
 * Fecha: 03-10-2023 
 * 
 */

$months_year = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$ship_game = array(
    array('█', '█', 'Destructor', '█', '█'),
    array('█', 'portaviones', '█', '█', '█'),
    array('█', 'Acorazado', '█', '█', '█')
);

$marks_daw = array(
    array('Javier' => 10, 'Adrián' => 0, 'Víctor' => 0),
    array('Héctor' => 5, 'Antonio' => 2, 'Ángel' => 0),
);
$irregular_verbs = array(
    'Begin' => array('Began', 'Begun'),
    'Get' => array('Got', 'Got'),
    'Cut' => array('Cut', 'Cut'),
    'Put' => array('Put', 'Put'),
);
$continents_info = array(
    'Europa' => array(
        'España' => array('Madrid', 'Bandera'),
        'Portugal' => array('Lisboa', 'Bandera'),
        'Serbia' => array('Belgrado', 'Bandera')
    ),
    'America' => array(
        'Estados Unidos de America' => array('Washinton D.C', 'Bandera'),
        'Mexico' => array('Ciudad de Mexico', 'Bandera'),
        'Argentina' => array('Buenos aires', 'Bandera')
    ),
    'Asia' => array(
        'China' => array('Beijin', 'Bandera'),
        'India' => array('Nueva delhi', 'Bandera'),
        'Filipinas' => array('Manila', 'Bandera')
    ),
);

echo "<p> Meses año </p>";
foreach ($months_year as $month) {
    echo $month ." ";
}
    echo "<p/>";
    echo "<p> Juego barquitos </p>";
foreach ($ship_game as $ship) {
    echo "<br>";
    foreach ($ship as $fila) {
        echo $fila;
    }
}
echo "<p/>";
echo "<p> NOTAS ALUMNOS </p>";
foreach ($marks_daw as $subject) {
    foreach ($subject as $student => $score) {
        echo "$student: $score<br>";
    }
}

echo "<p/>";
echo "<p> Verbos irregulares </p>";
foreach ($irregular_verbs as $verb => $past_forms) {
    echo "Verbo: $verb<br>";
    echo "Pasado Simple: " . $past_forms[0] . "<br>";
    echo "Pasado Participio: " . $past_forms[1] . "<br><br>";
}

echo "<p/>";
echo "<p> Info continentes </p>";
foreach ($continents_info as $continent => $countries) {
    echo "<h2>$continent</h2>";
    
    foreach ($countries as $country => $info) {
        echo "<h3>$country</h3>";
        echo "Capital: " . $info[0] . "<br>";
        echo "Bandera: " . $info[1] . "<br>";
    }
}