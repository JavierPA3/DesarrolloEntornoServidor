<?php
    /**
     * Script de la tabla de multiplicar con formulario
     *
     * @author Javier Postigo Arévalo 
     * 
    */

    include("./config/config.php");
    include("./lib/functions.php");

    $totalAciertos = 0;

    //Cargamos valores
    $valoresActuales = array();

    $n_aleatorios = array();
 
    $colors = array('red', 'blue', 'green', 'yellow', 'orange', 'purple', 'coral', 'crimson', 'greenyellow', 'aquamarine');
    
    $procesaForm = false;
    $error = false;

    if (isset($_POST["enviar"])) {
        $procesaForm = true;
        foreach ($_POST["num"] as $f => $v1) {
            foreach ($v1 as $c => $v2) {
                $n_aleatorios[] = array($f, $c);
                $valoresActuales[$f][$c] = $v2;
                if ($valoresActuales[$f][$c] == $f*$c){
                    $totalAciertos++;
                }
            }
        }
    } else {
        for ($i=0; $i < NUMINPUTS; $i++) { 
            do {
                $n = array(random_int(1, NUMTABLAS), random_int(1, NUMTABLAS));
            } while (existeValor($n[0], $n[1], $n_aleatorios));
            $n_aleatorios[] = $n;
            $valoresActuales[$n[0]][$n[1]]="";
        }
       
    }
    
   

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tablas de Multiplicar</title>
        <link rel="stylesheet" href="./css/style.css">
        
    </head>
    <body>
    <h2>Tablas de Multiplicar del 1 al 10</h2>
        <form method="post" action="">
            <table>
            <tr><th>x</th>
            <?php
                for ($i = 1; $i <= NUMTABLAS; $i++) {
                    echo "<th>".$i."</th>";
                }
            ?>
            </tr>
            <?php
                for ($i = 1; $i <= NUMTABLAS; $i++) {
                    echo '<tr>';
                    echo "<th>".$i."</th>";
                    for ($j = 1; $j <= NUMTABLAS; $j++) {
                        if (existeValor($i, $j, $n_aleatorios)) {
                            $claseRespuesta = "";
                            $icono = "";
                            if ($procesaForm) {
                                $icono = $valoresActuales[$i][$j] == $i*$j ? ":)" : ":(";
                                $claseRespuesta = $valoresActuales[$i][$j] == $i*$j ? "acierto" : "fallo";
                            }
                            echo "<td><input class=\"".$claseRespuesta."\" title=\"".$i."x".$j."\" type=\"text\" name=\"num[".$i."][".$j."]\" value=\"".$valoresActuales[$i][$j]."\">".$icono."</td>";
                        } else {
                            echo '<td>' . ($i * $j) . '</td>';
                        }                            
                                  
                    }
                    echo '</tr>';
                }
            ?>
            </table>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
        </form>
        <br/>
        <?php echo "Aciertos: $totalAciertos"; ?>
    </body>
</html>