

 <?php

 /**
  * 
* 8. A veces es necesario conocer exactamente el contenido de una variable. Piensa
*como puedes hacer esto y escribe un script con la siguiente salida:
*string(5) “Harry”
*Harry
*int(28)
*NULL
* autor: Javier Postigo 

  */
    $name = "Harry";
    $number = 1234567890123567894;
    $nullvar = null;

    echo var_dump($name);
    print("<p>");
    echo $name;
    print("<p>");
    echo gettype($number);
    echo "(". strlen($number).")";
    print("<p>");
    echo gettype($nullvar);

    ?>

<a href='https://github.com/JavierPA3/DesarrolloEntornoServidor/blob/main/Ra2/RA2_IT1_AE1/Actividad%202%20Evaluable/ejercicio8.php'>Enlace al github</a>
