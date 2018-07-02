<?php

// echo date('d'); //day
// echo date('m'); //month
// echo date('Y'); //year
// echo date('l'); //day of the week

// echo date('Y/m/d');

// echo date('h'); //hour
// echo date('i'); //minutes
// echo date('s'); //sec
// echo date('a'); //am / pm


date_default_timezone_set('Europe/Warsaw');

// echo date('h:i:sa');

$timestamp = strtotime('7:00pm March 22 2018');
$timestamp2 = strtotime('tomorrow');


// echo $timestamp;

echo date('m/d/Y h:i:sa', $timestamp2);

?>