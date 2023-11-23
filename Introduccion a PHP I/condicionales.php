<?php

# Condicionales
$a = 6;
$b = 3;

/* if ($a == $b) {
    echo "La variable a es igual a la variable b";
} elseif ($a > $b) {
    echo "La variable a es mayor a la variable b";
} elseif ($a < $b) {
    echo "La variable a es menor a la variable b";
} else {
    echo "Las variables son diferentes o hubo un error en el programa";
}
 */
#Operadores Ternarios

#variable=condicion ? condicionVerdadera : condicionFalso;
#variable=condicion ? condicionVerdadera : (condicion ? condicionVerdadera: condicionFalso);
#Las condiciones verdaderas o falsas se guardan en la variable
$operadorTernario = $a == $b ? "La variable a es igual a la variable b" : ($a < $b ? "La variable a es menor a la variable b" : "La variable a es mayor a la variable b");
echo $operadorTernario;
