<?php
include 'Config/config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .section {
            margin-top: 20px;
        }
        .section-title {
            font-weight: bold;
            margin-top: 10px;
        }
        .section-content {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Curriculum Vitae</h1>

        <div class="section">
            <div class="section-title">Información Personal</div>
            <div class="section-content">
                <p>Nombre: <?php echo $datos['nombre']; ?></p>
                <p>Apellidos: <?php echo $datos['apellidos']; ?></p>
                <p>Email: <?php echo $datos['email']; ?></p>
                <p>Teléfono: <?php echo $datos['telefono']; ?></p>
                <p>Resumen: <?php echo $datos['resumen']; ?></p>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Redes Sociales</div>
            <div class="section-content">
                <p>Twitter: <a href="<?php echo $datos['redessociales']['twitter']; ?>">Perfil de Twitter</a></p>
                <p>LinkedIn: <a href="<?php echo $datos['redessociales']['linkedin']; ?>">Perfil de LinkedIn</a></p>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Experiencia Laboral</div>
            <?php foreach ($datos['trabajos'] as $trabajo): ?>
                <?php if ($trabajo['visible']): ?>
                    <div class="section-content">
                        <h3><?php echo $trabajo['titulo']; ?></h3>
                        <p>Descripción: <?php echo $trabajo['descripcion']; ?></p>
                        <p>Fecha de Inicio: <?php echo $trabajo['fechinicio']; ?></p>
                        <p>Fecha de Fin: <?php echo $trabajo['fechfin']; ?></p>
                        <p>Logros: <?php echo implode(', ', $trabajo['logros']); ?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="section">
            <div class="section-title">Proyectos</div>
            <?php foreach ($datos['proyectos'] as $proyecto): ?>
                <div class="section-content">
                    <h3><?php echo $proyecto['titulo']; ?></h3>
                    <p>Descripción: <?php echo $proyecto['descripcion']; ?></p>
                    <p>Enlace: <a href="<?php echo $proyecto['enlace']; ?>">Ver proyecto en GitHub</a></p>
                    <p>Tecnologías: <?php echo implode(', ', $proyecto['tecnologias']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="section">
            <div class="section-title">Habilidades</div>
            <div class="section-content">
                <?php foreach ($datos['skills'] as $skill): ?>
                    <h3><?php echo $skill['categoria']; ?></h3>
                    <p>Habilidades: <?php echo implode(', ', $skill['habilidades']); ?></p>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Asignaturas</div>
            <div class="section-content">
                <ul>
                    <?php foreach ($datos['asignaturas'] as $asignatura => $enlace): ?>
                        <li><a href="<?php echo $enlace; ?>"><?php echo $asignatura; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
