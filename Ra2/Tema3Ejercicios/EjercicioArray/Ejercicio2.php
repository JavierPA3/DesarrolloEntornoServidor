<?php
$ejercicios = [
    'bucles' => [
        'ejercicio1' => [
            'enlace' => '../ActividadesBucles/Ejercicio1.php',
            'descripcion' => 'Ejercicio 1'
        ],
        'ejercicio2' => [
            'enlace' => '../ActividadesBucles/Ejercicio2.php',
            'descripcion' => 'Ejercicio 2'
        ],
        'ejercicio3' => [
            'enlace' => '../ActividadesBucles/ejercicio3.php',
            'descripcion' => 'Ejercicio 3'
        ],
        'ejercicio4' => [
            'enlace' => '../ActividadesBucles/Ejercicio4.php',
            'descripcion' => 'Ejercicio 4'
        ],
        'ejercicio5' => [
            'enlace' => '../ActividadesBucles/Ejercicio5.php',
            'descripcion' => 'Ejercicio 5'
        ],
    ],
    'condicionales' => [
        'ejercicio1' => [
            'enlace' => '../EjerciciosCOndicionales/1.php',
            'descripcion' => 'Ejercicio 1'
        ],
        'ejercicio2' => [
            'enlace' => '../EjerciciosCOndicionales/2.php',
            'descripcion' => 'Ejercicio 2'
        ],
        'ejercicio3' => [
            'enlace' => '../EjerciciosCOndicionales/3.php',
            'descripcion' => 'Ejercicio 3'
        ],
        'ejercicio4' => [
            'enlace' => '../EjerciciosCOndicionales/4.php',
            'descripcion' => 'Ejercicio 4'
        ],
        'ejercicio5' => [
            'enlace' => '../EjerciciosCOndicionales/5.php',
            'descripcion' => 'Ejercicio 5'
        ],
    ],
    'arrays' => [
        'ejercicio1' => [
            'enlace' => 'Ejercicio1.php',
            'descripcion' => 'Ejercicio 1'
        ],
        'ejercicio2' => [
            'enlace' => 'Ejercicio2.php',
            'descripcion' => 'Ejercicio 2'
        ],
        'ejercicio3' => [
            'enlace' => 'Ejercicio3.php',
            'descripcion' => 'Ejercicio 3'
        ],
        'ejercicio4' => [
            'enlace' => '#',
            'descripcion' => 'Ejercicio 4'
        ],
        'ejercicio5' => [
            'enlace' => '#',
            'descripcion' => 'Ejercicio 5'
        ],
    ],
    'formularios' => [
        'ejercicio1' => [
            'enlace' => '#',
            'descripcion' => 'Ejercicio 1'
        ],
        'ejercicio2' => [
            'enlace' => '#',
            'descripcion' => 'Ejercicio 2'
        ],
        'ejercicio3' => [
            'enlace' => '#',
            'descripcion' => 'Ejercicio 3'
        ],
        'ejercicio4' => [
            'enlace' => '#',
            'descripcion' => 'Ejercicio 4'
        ],
        'ejercicio5' => [
            'enlace' => '#',
            'descripcion' => 'Ejercicio 5'
        ],
    ],
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicios</title>
    <style>
        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        h1 {
            margin: 0;
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #0066cc;
        }
    </style>
</head>
<body>
    <header>
        <h1>Desarrollo Web Entorno Servidor</h1>
    </header>
    <main>
        <?php foreach ($ejercicios as $tema => $ejerciciosTema): ?>
            <h2><?= ucfirst($tema) ?></h2>
            <ul>
                <?php foreach ($ejerciciosTema as $ejercicio => $detalles): ?>
                    <li>
                        <a href="<?= $detalles['enlace'] ?>"><?= $detalles['descripcion'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </main>
</body>
</html>
