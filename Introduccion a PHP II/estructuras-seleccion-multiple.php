<?php

$diaDeLaSemana = 15;

# Match

$diaDeLaSemanaValidado = match ($diaDeLaSemana) {
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    default => "Es fin de semana"
};

echo $diaDeLaSemanaValidado; 





# Switch
/* if ($diaDeLaSemana > 7) {
    echo "Hey!! Ese dia no existe en la semana, solo debes poner numeros del 1 al 7";
} else {
    switch ($diaDeLaSemana) {
        case '1':
            echo "Es Lunes";
            break;
        case '2':
            echo "Es Martes";
            break;
        case '3':
            echo "Es Miercoles";
            break;
        case '4':
            echo "Es Jueves";
            break;
        case '5':
            echo "Es Viernes";
            break;
        default:
            echo "Es fin de semana";
            break;
    }
} */
