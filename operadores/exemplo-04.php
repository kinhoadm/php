<?php

//>> Conhecendo os operadores em PHP

// Operadores de comparação:

$a = 30;
$b = 55;

echo "A = " . $a . "; B = " . $b;
echo "<br><br>";

var_dump($a > $b); // maior que

var_dump($a < $b); // menor que

var_dump($a == $b); // comparação de valor

var_dump($a === $b); // comparação de valor e do tipo
var_dump($a != $b); // diferença apenas do valor

var_dump($a !== $b); // diferença do valor e do tipo de dado
var_dump($a <= $b);

var_dump($a >= $b);

?>