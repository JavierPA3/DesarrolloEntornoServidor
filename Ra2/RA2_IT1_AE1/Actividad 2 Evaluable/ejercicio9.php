<!-- 9. Escribir un script que utilizando variables permita obtener el siguiente resultado:
Valor es string.
Valor es double.
Valor es boolean.
Valor es integer.
Valor is NULL.
Autor: Javier Postigo -->

<?php

    $valor1 = "1";
    $valor2 = 12345678901234567890;
    $valor3 = true;
    $valor4 = 2;
    $valor5 = null;

    print("Valor es ". gettype($valor1) .".");
    print("<p>");
    print("Valor es ". gettype($valor2) .".");
    print("<p>");
    print("Valor es ". gettype($valor3) .".");
    print("<p>");
    print("Valor es ". gettype($valor4) .".");
    print("<p>");
    print("Valor es ". gettype($valor5) .".");
?>

<a href=''>Enlace al github</a>
