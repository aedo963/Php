<?php

declare(strict_types=1);

$variableGlobal = 0;
# funcion en php
function sumar($a, $b = 0)
{
    //variable local
    $suma = $a + $b;
    return $suma;
}

//$variableGlobal++;

$resultado = sumar(1);

echo "la variable resultado vale $resultado";

//echo "<br> La variable global vale: " . $variableGlobal;


#parametros

#parametros fijos
/* function imprimirPersonas($persona1, $persona2, $persona3)
{
    echo $persona1 . "<br>";
    echo $persona2 . "<br>";
    echo $persona3 . "<br>";
} */

#parametros variables
/* function imprimirPersonas(...$personas)
{
    foreach ($personas as $persona) {
        echo $persona . "<br>";
    }
}

imprimirPersonas('Juanito', 'Pepito', 'Rosita', 'Francisco', 'Pedro'); */


function multiplicarEnteros(int|float $a, int $b): int|float|string
{
    $multiplicacion = $a * $b;
    return $multiplicacion;
}

echo "<br> El resultado es: " . multiplicarEnteros(3.687, 2);
