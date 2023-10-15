<?php
include 'Config/config.php';

$email = $datos["email"];
$phone = $datos["telefono"];
$nombre = $datos["nombre"];
$apellido = $datos["apellidos"];
$twitter = $datos["redessociales"]["twitter"];
$linkedin = $datos["redessociales"]["linkedin"];
$catprof = $datos["catprofesional"];
$resumen = $datos["resumen"];
$foto = $datos["foto"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javier</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div>
        <h1>
            <?php echo $nombre . " " . $apellido ?>
        </h1>
        <ul>
            <li>Email:
                <?php echo $email ?>
            </li>
            <li>Categoría profesional:
                <?php echo $catprof ?>
            </li>
            <li>Telefono:
                <?php echo $phone ?>
            </li>
            <li>Twitter:
                <?php echo "<a href=\"$twitter\">Twitter</a>" ?>
            </li>
            <li>Linkedin:
                <?php echo "<a href=\"$linkedin\">Linkedin</a>" ?>
            </li>
            <li>Resumen:
                <?php echo $resumen ?>
            </li>
            <li>Foto:</li>
            <?php echo "<img src=$foto height='200' width='200' />" ?>
            <h2>Trabajos</h2>
            <?php

            foreach ($datos["trabajos"] as $trabajo) {
                echo "<li>Título: " . $trabajo["titulo"] . "</li>";
                echo "<li>Descripción: " . $trabajo["descripcion"] . "</li>";
                echo "<li>Fecha de Inicio: " . $trabajo["fechinicio"] . "</li>";
                echo "<li>Fecha de Fin: " . $trabajo["fechfin"] . "</li>";

                echo "<li>Logros:</li>";
                echo "<ul>";
                foreach ($trabajo['logros'] as $logro) {
                    echo "<li>$logro</li>";

                }
                echo "</ul>";
                echo "<br>";

            }

            echo "<h2>PROYECTOS</h2>";

            foreach ($datos["proyectos"] as $proyectos) {
                echo "<li>Título: " . $proyectos["titulo"] . "</li>";
                echo "<li>Descripción: " . $proyectos["descripcion"] . "</li>";
                echo "<li>Enlace proyecto: <a href=" . $proyectos['enlace'] . ">https://github.com/JavierPA3/BuscaPelis</a> </li>";
                echo "<li>Tecnologias:</li>";
                echo "<ul>";
                foreach ($proyectos['tecnologias'] as $tecno) {
                    echo "<li>$tecno</li>";
                }
                echo "</ul>";
            }
            echo "<h2>SKILLS</h2>";

            foreach ($datos["skills"] as $skill) {
                echo "<li>Título: " . $skill["categoria"] . "</li>";
                echo "<li>Habilidades:</li>";
                echo "<ul>";
                foreach ($skill['habilidades'] as $hab) {
                    echo "<li>$hab</li>";
                }
                echo "</ul>";
            }

            echo "<h2>ASIGNATURAS</h2>";

            foreach ($datos["asignaturas"] as $asignatura => $enlace) {
                echo "<li><a href='$enlace'>$asignatura</a></li>";
            }

            ?>



        </ul>
    </div>
</body>

</html>