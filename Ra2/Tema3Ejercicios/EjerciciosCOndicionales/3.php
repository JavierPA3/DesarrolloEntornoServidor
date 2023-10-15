<?php

$day = 26;
$month = 10;
$year = 2000;


$today_day = (int)date("d");
$today_month = (int)date("m");
$today_year = (int)date("Y");

$yo = $today_year - $year;

if ($today_month < $month or ($today_month == $month and $today_day < $day)) {
    $yo--;


}
echo $yo;

