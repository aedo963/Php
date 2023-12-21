<?php
#Reemplazaremos la funcion require_once por un autoload
//require_once('Ejemplo1/Humano.php');
//require_once('Ejemplo2/Humano.php');

#Estoy indicando que utilizaré la clase Humano que viene de la carpeta raiz Ejemplo
use Ejemplo1\Humano as Humano;
#Poniendo un alias para diferenciar entre usos del namespace
use Ejemplo2\Humano as Humano2;
use Utils\Utils;

use Ejemplo3\Persona;

#Implementando un autoload
spl_autoload_register(function ($clase) {
    if (file_exists(str_replace('\\', '/', $clase) . '.php')) {
        require_once(str_replace('\\', '/', $clase) . '.php');
    }
});

$humano = new Humano;
$humano->saludar();

echo "<hr> Creando una intancia de Humano que viene de la carpeta Ejemplo2 <br>";
$humano2 = new Humano2;
$humano2->saludar();
//$humano2->despedirse();
//      ->despedirse

$humano3 = new Humano2;

Utils::imprimir("Hola desde un método estatico");


#realizando la construccion de un objeto con Fluent Interface
#Aplicando los atributos con nombre -- Básicamente para que no cometamos errores al momento de poner valores
$persona1 = new Persona(apellido: "Vargas", nombre: "Juanito", numeroTelefonico: "987654321");

//Antes
/**
 * $persona1->setNombre("Juanito");
 * $persona1->setApellido("Vargas");
 * $persona1->setNumeroTelefonico("123456789");
 */
//Desspués con Fluent Interface
/* $persona1->setNombre("Juanito")
    ->setApellido("Vargas")
    ->setNumeroTelefonico("123456789"); */

var_dump($persona1);
