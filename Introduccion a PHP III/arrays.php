<?php

#array unidimensional
$array = [1, 2, 3, 4, 5];
$array[5] = 6;
$array[6] = 7;
//var_dump($array);

//echo $array[4];

$arrayMultiple = [1, "Hola", true];

#array asociativo
#hashmap
#diccionario de datos
$datosDeUnaPersona = [
    "nombre" => "Juan",
    "correo" => "juanito@mail.com",
    "numeroTelefonico" => "987654321"
];

/* echo $datosDeUnaPersona["nombre"] . "<br>";
echo $datosDeUnaPersona["correo"] . "<br>";
echo $datosDeUnaPersona["numeroTelefonico"] . "<br>"; */

/* foreach ($datosDeUnaPersona as $indice => $dato) {
    echo $indice . ": " . $dato . "<br>";
} */

#arrays multidimensionales: array de arrays
#matrices
$datosDeVariasPersonas =
    [
        [
            "nombre" => "Juanito",
            "correo" => "juanitotupapa@mail.com",
            "numeroTelefonico" => "123456789",
            "direccion" => [
                "pais" => "Perú",
                "calle" => "Jr Los Gladiolos 125",
                "codigoPostal" => "12000"
            ]
        ],
        [
            "nombre" => "Roberto",
            "correo" => "robertoelchambero@mail.com",
            "numeroTelefonico" => "897654321"
        ],
        [
            "nombre" => "Rafael",
            "correo" => "rafaelelcantante@mail.com",
            "numeroTelefonico" => "654897321"
        ]
    ];


foreach ($datosDeVariasPersonas as $indice => $datosDeUnaPersona) {
    echo $datosDeUnaPersona["nombre"] . "<br>";
    echo $datosDeUnaPersona["correo"] . "<br>";
    echo $datosDeUnaPersona["numeroTelefonico"] . "<br>";
    echo "<hr>";
}


//desatomizando el array en variables

list($a, $b, $c) = $datosDeVariasPersonas;

//var_dump($b);

$numeros = range(1, 20);

#funciones de arrays en php

//unset($numeros[4]);

var_dump($numeros);
//true
//echo in_array(20, $numeros);

//var_dump($numeros);


//imprimiendo el numeroTelefonico de Rafael
/* echo $datosDeVariasPersonas[2]["numeroTelefonico"]; */
