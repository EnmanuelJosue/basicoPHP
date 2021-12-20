<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false; 
$michis_programan_con_PHP= false;

//Practicando And 
// var_dump($michis_felinos && $michis_4_patas);

// Practicando OR
var_dump($michis_4_patas || $michis_vuelan);

//Practicand NOT
// var_dump(!$michis_4_patas);

//Experimento 
$resultado = $michis_4_patas and $michis_programan_con_PHP;
var_dump($resultado);
echo "\n";