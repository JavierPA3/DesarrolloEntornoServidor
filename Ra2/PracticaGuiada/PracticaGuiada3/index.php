<?php
$numeritos = isset($_POST["numeritos"]) ? (int) $_POST["numeritos"] : 0;
$valores = isset($_POST["valores"]) ? $_POST["valores"] : array();
$suma = array_sum($valores);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javier Postigo Arévalo</title>
</head>

<body>
    <form action="" method="post">
        <?php if ($numeritos == 0) { ?>
            <label for="numeritos">Ingresa un número:</label>
            <input type="number" name="numeritos" id="numeritos" required>
            <input type="submit" value="Enviar">
        <?php } else { ?>
            <h2>Ingresa valores y se sumarán entre si:</h2>
            <?php for ($i = 0; $i < $numeritos; $i++) { ?>
                <label for="valor<?= $i ?>">Valor
                    <?= $i + 1 ?>:
                </label>
                <input type="number" name="valores[]" id="valor<?= $i ?>" required>
            <?php } ?>
            <input type="submit" value="Calcular Suma">
        <?php } ?>
    </form>
    <h3>Resultado de la suma:
        <?= $suma ?>
    </h3>
</body>

</html>