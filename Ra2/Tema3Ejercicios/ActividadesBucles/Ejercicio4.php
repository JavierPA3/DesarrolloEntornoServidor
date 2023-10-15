<?php

/** 
 * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor
 * hexadecimal que le corresponde. Cada celda será un enlace a una página que
 * mostrará un fondo de pantalla con el color seleccionado. ¿Puedes hacerlo con los
 * conocimientos que tienes?
 * @author javier 
 * fecha: 03-10-2023
 */

 $number = rand(0, 10000);
 $cont = 0;
 echo "<table border = 'solid 1px'>";
 echo "<tr>";
 for ($i = 1; $i <= 30; $i++) {
    $number = rand(0, 10000);
    echo "<td style='background-color:#" . $number . "'><a href='fondoEj4.php?color=" . $number . ";'>" . $number . "</a></td>";
 
 }
 echo "</tr>";
 echo "<tr>";
 
 while ($cont <= 30) {
     echo "<tr>";
     for ($x = 1; $x <= 30; $x++) {
        $number = rand(0, 10000);

        echo "<td style='background-color:#" . $number . "'><a href='fondoEj4.php?color=" . $number . ";'>". $number . "</a></td>";
    }
     $cont++;
     echo "</tr>";
 }
 echo "</tr>";
 echo "</table>";