<?php
/**
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 * 
 * Autor: Javier Postigo Arévalo
 * Fecha: 30-09-2023
 */

$number = 1;
echo "<table border = 'solid 1px'>";
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td>" . $i . "</td>";

}
echo "</tr>";
echo "<tr>";

while ($number <= 10) {
    echo "<tr>";
    for ($x = 1; $x <= 10; $x++) {
        echo "<td>". $x * $number."</td>";
    }
    $number++;
    echo "</tr>";
}
echo "</tr>";
echo "</table>";