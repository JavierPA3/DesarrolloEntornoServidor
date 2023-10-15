<?php

/**
 * 
 * Modifica la página inicial realizada, incluyendo una imagen de cabecera en función
 * de la estación del año en la que nos encontremos y un color de fondo en función de
 * la hora del día.
 * 
 * Autor: Javier Postigo Arévalo
 * Fecha: 02-10-2023
 * 
 */

$estacion = "primavera";
$foto;
if (strtolower($estacion) == "invierno") {
    $foto = "imgs/1.jpg";
} else if (strtolower($estacion) == "verano") {
    $foto = "imgs/4.jpg";
} else if (strtolower($estacion) == "otoño") {
    $foto = "imgs/2.jpeg";
} else if (strtolower($estacion) == "primavera") {
    $foto = "imgs/3.jpg";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo "<img src=$foto height='200' width='300' />" ?></p>
    <h1>Hola Mundo</h1>
    
</body>

</html>