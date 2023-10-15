<?php
 /**
  * Carga en variables mes y año e indica el numero de dias del mes utiliza la estructura de control switch
  * Autor: Javier Postigo Arévalo
  * Fecha: 27-09-2023
  */

  $month = '2';
  $year = '2024';
  $nDays = 31; // Inicializamos a 31 para los meses que tienen 31 días.

  switch ($month) {
    case 4:
    case 6:
    case 9:
    case 11:
        $nDays = 30;
        break;
    case 2:
        $nDays = 28; 
        # Sumamos 1 si es bisiesto.
        if ((($year % 4 == 0) and ($year % 100 != 0)) || ($year % 400 == 0)) {
            $nDays++;
            }
        break;
  }
  /**
   * Vista
   * 
   * 
   */
  echo "El mes ". $month ." del ". $year ." tiene ". $nDays ." días."; 
