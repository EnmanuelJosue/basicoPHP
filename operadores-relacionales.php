<?php 
$a = 5;
$b = 5;
$b2 = "5";

$c = 9;
$d = 2;

//Operador == Igual
// var_dump($a == $b2);

//Operador Identico === Identico
// var_dump($a === $b2);

// != Diferente 
// var_dump($a != $b2);

// !== Diferente compara tipos
// var_dump($a !== $b2);

// < Menor que
// var_dump($a < $b);
// var_dump($c < $b);
// var_dump($d < $b);


//Mayor que > 
// var_dump($a > $b);
// var_dump($c > $b);
// var_dump($d > $b);

// Mayor o igual que >=
// var_dump($a >= $b);
// var_dump($c >= $b);
// var_dump($d >= $b);

// <= Menor o igual que
// var_dump($a <= $b);
// var_dump($c <= $b);
// var_dump($d <= $b);

// <=> Nave Espacial -- Este devuelve menos 1 si el numero que esta a la izquierda es menor que el de la derecha, si los numeros son iguales devuelve 0, y si el de la izquierda es mayor que el de la derecha va devolver 1 positivo, 
// echo 2 <=> 1;
// echo "\n";
// echo -50 <=> 1;
// echo "\n";
// echo 1 <=> 1;
// echo "\n";


//Operador ?? Fusión de null
$edad_de_pepito = 23;
echo $edad_de_juanito ?? $edad_de_pepito;