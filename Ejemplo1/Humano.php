<?php

# Estamos definiendo un nombre de espacio, diciendole que pertenece al grupo Ejemplo1
namespace Ejemplo1;

use Utils\Utils;

class Humano
{

    public function saludar()
    {
        Utils::imprimir("Hola desde la carpeta Ejemplo1");
    }
}
