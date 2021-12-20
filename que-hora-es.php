<?php 
// $segundos = readline("Ingresa el tiempo en segundos: ");

// $horas = (int) ($segundos / 3600);
// $segundos = (int) ($segundos % 3600);
// $minutos = (int) ($segundos / 60);
// $segundos = (int) ($segundos % 60);
// echo "Son $horas horas, $minutos minutos y $segundos segundos";

$horas = readline("Ingresa el tiempo en horas: ");
$minutos = readline("Ingresa el tiempo en minutos: ");
$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int) ($horas*3600);
$minutos = (int) ($minutos*60);
$segundos = (int) ($segundos);
$total = $horas + $minutos + $segundos;
print_r($total);
var_dump($total);
echo "Segundos en total $total";

echo "\n";

$a = 1;
$a++;
echo "$a";