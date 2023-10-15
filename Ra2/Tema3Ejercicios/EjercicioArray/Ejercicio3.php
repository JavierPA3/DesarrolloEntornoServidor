<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Selección Aleatoria de Alumno</title>
</head>
<body>
    <h1>Alumno Aleatorio</h1>
    <p>Nombre: <span id="nombreAlumno"></span></p>
    <button id="seleccionarAlumno">Seleccionar Alumno Aleatorio</button>
    <script>
        var alumnos = [
            {
                nombre: "Javier Postigo Arévalo",
            },
            {
                nombre: "Adrián González Martínez",
            },
            {
                nombre: "Víctor Fernández España",
            },
            {
                nombre: "Ángel Ariza",
            },
            {
                nombre: "Antonio Carmona",
            },
            {
                nombre: "Quique Ruz",
            },
            {
                nombre: "Priego",
            },
            {
                nombre: "Andrés",
            },
            {
                nombre: "Pablo Mérida",
            },
            {
                nombre: "Eduardo",
            },
            {
                nombre: "Adrian Cordovero",
            },
            {
                nombre: "Alex",
            },
            {
                nombre: "Ángel Cubero Olivares",
            },
            {
                nombre: "Dani",
            },
            {
                nombre: "Galisteo",
            },
            {
                nombre: "Lai",
            },
            {
                nombre: "Manu",
            },
            {
                nombre: "Frias",
            },
            {
                nombre: "Willy",
            },
            {
                nombre: "Héctor",
            },
        ];

        function seleccionarAlumnoAleatorio() {
            var indiceAleatorio = Math.floor(Math.random() * alumnos.length);
            var alumnoSeleccionado = alumnos[indiceAleatorio];
            document.getElementById("nombreAlumno").textContent = alumnoSeleccionado.nombre;
        }
        document.getElementById("seleccionarAlumno").addEventListener("click", seleccionarAlumnoAleatorio);
        seleccionarAlumnoAleatorio();
    </script>
</body>
</html>
