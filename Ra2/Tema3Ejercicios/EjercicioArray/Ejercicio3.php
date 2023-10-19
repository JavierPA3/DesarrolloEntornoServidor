<?php
$nombreAlumnos = array('Javier Postigo Arévalo', 'Adrián González Martínez', 'Víctor Fernández España', 'Hector Cevallos Paredes', 'Ángel Fernández Ariza', 'Antonio Carmona Bascon', 'Adrián Cordovero', 'Alejandro', 'Andres Rodríguez', 'Ángel Cubero Olivares', 'Dani', 'Edu', 'Galisteo', 'Laura', 'Manu', 'Pablo Mérida Velasco', 'Alejandro Priego Izquierdo', 'Jesús Frías', '');

if (isset($_POST['seleccionar'])) {
    $alumnoSeleccionado = $nombreAlumnos[array_rand($nombreAlumnos)];
    echo "<h1>Alumno seleccionado: " . $alumnoSeleccionado . "</h1>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Seleccionar Alumno Aleatorio</title>
</head>

<body>
    <h1>Seleccionar Alumno Aleatorio</h1>
    <form method="post">
        <input type="submit" name="seleccionar" value="Generar un alumno aleatorio">
    </form>
    <div id="resultado">
    </div>
</body>

</html>
