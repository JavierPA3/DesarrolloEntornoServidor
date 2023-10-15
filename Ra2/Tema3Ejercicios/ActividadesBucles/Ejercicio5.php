<?php
// Obtener el año (puedes obtenerlo de tus variables)
$year = 2023;

// Lista de festivos (marcamos todos los domingos como festivos)
$festivos = [
    '2023-01-01', // Año Nuevo
    '2023-01-06', // Epifanía del Señor
    '2023-02-28', // Día de Andalucía
    '2023-04-06', // Jueves Santo
    '2023-04-07', // Viernes Santo
    '2023-05-01', // Día del Trabajador
    '2023-06-15', // Corpus Christi
    '2023-08-15', // Asunción de la Virgen
    '2023-10-12', // Día de la Hispanidad
    '2023-11-01', // Todos los Santos
    '2023-12-06', // Día de la Constitución
    '2023-12-08', // La Inmaculada Concepción
    '2023-12-25', // Navidad
];
for ($month = 1; $month <= 12; $month++) {
    $firstDay = date("N", strtotime("$year-$month-01"));
    $daysInMonth = date("t", strtotime("$year-$month-01"));

    for ($day = 1; $day <= $daysInMonth; $day++) {
        $date = "$year-$month-$day";
        $dayOfWeek = date('N', strtotime($date));
        if ($dayOfWeek == 7) {
            $festivos[] = $date;
        }
    }
}

// Array de nombres de los meses
$meses = [
    1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio',
    7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'
];

// Obtener el mes seleccionado (puedes obtenerlo de tus variables)
$selectedMonth = isset($_GET['month']) ? (int)$_GET['month'] : date('n');

// Bucle para mostrar el calendario del mes seleccionado
$monthName = $meses[$selectedMonth];

// Obtener el primer día del mes
$firstDay = date("N", strtotime("$year-$selectedMonth-01"));

// Obtener el número de días en el mes
$daysInMonth = date("t", strtotime("$year-$selectedMonth-01"));

// Obtener el día actual
$today = date('j');

// Crear una tabla HTML para el calendario
echo '<form action="" method="GET">';
echo '<label for="month">Selecciona un mes:</label>';
echo '<select name="month" id="month">';
foreach ($meses as $key => $nombre_mes) {
    $selected = ($key == $selectedMonth) ? 'selected' : '';
    echo "<option value=\"$key\" $selected>$nombre_mes</option>";
}
echo '</select>';
echo '<input type="submit" value="Mostrar Mes">';
echo '</form>';

echo '<table border="1">';
echo '<tr><th colspan="7">' . $monthName . ' ' . $year . '</th></tr>';
echo '<tr>';
$daysOfWeek = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
foreach ($daysOfWeek as $day) {
    echo '<th>' . $day . '</th>';
}
echo '</tr>';

$dayCount = 1;
echo '<tr>';
for ($i = 1; $i < $firstDay; $i++) {
    echo '<td></td>';
    $dayCount++;
}
for ($day = 1; $day <= $daysInMonth; $day++) {
    $isToday = ($day == $today && $selectedMonth == date('n')) ? 'style="background-color: green;"' : '';
    $isHoliday = in_array("$year-$selectedMonth-$day", $festivos) ? 'style="background-color: red;"' : '';

    // Si es un día festivo que también coincide con el día actual, cambia el fondo a verde
    if ($isHoliday && $isToday) {
        $isToday = 'style="background-color: green;"';
    }

    echo "<td $isToday $isHoliday>$day</td>";

    if ($dayCount % 7 == 0) {
        echo '</tr>';
        if ($day < $daysInMonth) {
            echo '<tr>';
        }
    }
    $dayCount++;
}
while ($dayCount % 7 != 1) {
    echo '<td></td>';
    $dayCount++;
}
echo '</tr>';
echo '</table>';
?>
