<?php

#operadores
$a = 11;
$b = 10;

// === estoy comparando que tengan el mismo valor y que sean
// del mismo tipo de variable
var_dump($a === $b);

#operadores de asignacion combinada
//$a = $a + 1;
//++ solo puede aumentar de 1 en 1
//$a++;
//$a += 5;
//$a = $a * 10;
//$a *= 10;

$residuo = $a % 2;
echo "<br> El residuo de la división de $a entre 2 es $residuo";
//6
echo "<br>" . $a;   
