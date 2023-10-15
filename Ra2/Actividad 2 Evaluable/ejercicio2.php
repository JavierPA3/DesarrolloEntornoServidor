
<?php
/**
 *  Ficha personal con los datos cargados en variables. El resultado debe mostrar una
* foto personal.
* @autor: Javier Postigo Arévalo 2º DAW  

 * 
 * 
 */

$email = "a21poarja@iesgrancapitan.org";
$phone = "612345443";
$nombre = "Javier";
$apellido = "Postigo";
$twitter = "https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor";
$linkedin = "https://es.linkedin.com/";
$foto = "img/descarga.png";
?>
            <h1><?php echo $nombre. " ". $apellido ?></h1>
            <li>Email: <?php echo $email?></li>
            <li>Telefono: <?php echo $phone?></li>
            <li>Twitter: <?php echo "<a href=\"$twitter\">Twitter</a>" ?> </li>
            <li> Linkedin: <?php echo "<a href=\"$linkedin\">Linkedin</a>"?></li>
            <li> Foto personal: <?php echo "<img src=\"$foto\">" ?> </li>

            <a href='https://github.com/JavierPA3/DesarrolloEntornoServidor/blob/main/Ra2/RA2_IT1_AE1/Actividad%202%20Evaluable/ejercicio2.php'>Enlace al github</a>
