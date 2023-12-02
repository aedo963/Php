<?php
# while
/* $a = 1;
while ($a <= 10) {
    echo "Esta es la iteración $a";
    //$a=$a+1;
    $a++;
}
echo "La cantidad de iteraciones es $a"; */

#do while
/* $a = 1;
do {
    echo "Estoy en la iteracion $a <br>";
    $a++;
} while ($a <= 10); */

# tamaño array: 4
# cantidad indices: 3
$personas = ["Italo", "Jorge", "Fernando", "Michel"];
$tamanoArray = sizeof($personas);
#for
/* for ($index = 0; $index < $tamanoArray; $index++) {
    echo $personas[$index] . "<br>";
} */

#foreach
foreach ($personas as $indice => $persona) {
    if ($persona == "Fernando") {
        die;
    }
    echo $persona . ", está en el indice $indice <br>";
}

echo "Por aqui seguiria programando";

//break: Sentencia para salir del bucle
//continue: Sentencia para saltar el paso del bucle
//die: Sentencia para matar todo el programa
