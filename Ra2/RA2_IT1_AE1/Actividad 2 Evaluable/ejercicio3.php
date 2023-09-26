<!-- Script que, a partir del radio almacenado en una variable y la definición de la
constante PI, calcule el área del círculo y la longitud de la circunferencia. El debe
mostrar valor de radio, longitud de la circunferencia, área del círculo y dibujará un
círculo utilizando gráficos vectoriales.
@autor: Javier Postigo Arévalo 2º DAW  -->
<?php
    define("PI", 3.1416);
    $radio = 100;
    $area = PI * pow($radio, 2);
    $longitud = 2 * PI * $radio;

    echo("El radio es: ". $radio);
    print("<p>");
    echo "El area es ". $area; 
    print("<p>");
    echo "La longitud de la circunferencia es ". $longitud;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>


</pre>
<div style="text-align: center;">
<svg width="300" height="300" style="border: 1px solid black">
        <circle cx="150" cy="150" r="<?php echo $radio; ?>" fill="transparent" stroke="black">
        </circle>
    </svg>
</div>

<a href=''>Enlace al github</a>

</body>
</html>
