<?php
$email = "a21poarja@iesgrancapitan.org";
$phone = "612345443";
$nombre = "Javier";
$apellido = "Postigo";
$twitter = "https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor";
$linkedin = "https://es.linkedin.com/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javier</title>
</head>
<body>
    <div>
        <h1><?php echo $nombre. " ". $apellido?></h1>
        <ul>
            <li>Email: <?php echo $email?></li>
            <li>Telefono: <?php echo $phone?></li>
            <li>Twitter: <?php echo "<a href=\"$twitter\">Twitter</a>" ?> </li>
            <li> Linkedin: <?php echo "<a href=\"$linkedin\">Linkedin</a>"?></li>
        </ul>
    </div>
</body>
</html>