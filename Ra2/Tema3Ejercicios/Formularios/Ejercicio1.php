<?php



$array = array('nombre', 'apellidos');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Ej1php.php" method="post">
        <?php
        foreach ($array as $value) {
            echo "<input type=\text\" name=\"".$value. "\" placeholder=\"".$value. "\"/>";
            echo "<br>";
        }
        ?>
        <input type="submit" name="enviar" value="Mono Fumón" />
    </form>
</body>

</html>