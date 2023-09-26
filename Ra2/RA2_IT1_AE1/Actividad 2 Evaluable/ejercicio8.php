<!-- 8. A veces es necesario conocer exactamente el contenido de una variable. Piensa
como puedes hacer esto y escribe un script con la siguiente salida:
string(5) “Harry”
Harry
int(28)
NULL
autor: Javier Postigo -->

 <?php
    $name = "Harry";
    $number = 1234567890123567894;
    $nullvar = null;

    echo gettype($name);
    echo "(". strlen($name).") ". "\"$name\"";
    print("<p>");
    echo $name;
    print("<p>");
    echo gettype($number);
    echo "(". strlen($number).")";
    print("<p>");
    echo gettype($nullvar);

    ?>

<a href=''>Enlace al github</a>
