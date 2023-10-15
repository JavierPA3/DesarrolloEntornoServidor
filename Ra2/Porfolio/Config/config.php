<?php
$datos = array(
    "nombre" => "Javier",
    "apellidos" => "Postigo Arévalo",
    "foto" => 'img/icono2.avif',
    "catprofesional" => "Php developer",
    "email" => "a21poarja@iesgrancapitan.org",
    "telefono" => "603404045",
    "resumen" => "Hola soy javier de 2º DAW",

    "redessociales" => array(
        "twitter" => "https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
        "linkedin" => "https://es.linkedin.com/",
    ),
    "trabajos" => array(
        array(
            "titulo" => 'Desarrollador de Apps web',
            "descripcion" => "Formado en el Ies Gran Capitán",
            'visible' => true,
            'fechinicio' => '19/09/2021',
            'fechfin' => '31/03/2024',
            'logros' => array("Programador ", "PHP")
        ),

    ),

    "proyectos" => array(
        array(
        'titulo' => "API: BuscaPelis",
        "descripcion" => "Aplicación que utiliza una API para buscar información sobre películas.",
        "enlace" => "https://github.com/JavierPA3/BuscaPelis",
        "tecnologias" => array(
            "API RES",
            "Python"
        )
        ),
    ),
    'skills' => array(
        array(
            'categoria' => 'Programador',
            'habilidades' => array('Orientado a objetos', 'Estructurada')
        ),
        ),
    'asignaturas' => array(
            'Desarrollo Web en Entorno Servidor' => "../index.html",
            'Desarrollo Web en Entorno Cliente' => "../bajodesarrollo.html",
            'Diseño de interfaces web' => "../bajodesarrollo.html",
            'Wordpress' => "../bajodesarrollo.html"

    ),
);