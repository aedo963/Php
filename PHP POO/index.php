<?php

declare(strict_types=1);
# Importando al archivo que tiene la clase Persona
require_once('clases/Persona.php');

# Instanciar a un objeto en base a la clase Persona
# Instancia guardada en una variable(objeto) 
# persona1 es el objeto
$persona1 = new Persona;
# Accediendo al atributo nombre y dandole un valor
$persona1->setNombre("Juanito");
# Accediendo al atributo apellidos y dandole valores
$persona1->setApellidos("El de Los Ojitos Claros");
$persona1->setNumeroTelefonico("987654321");
# Consultando el valor e imprimiendo al atributo nombre
echo $persona1->getNombre();
echo "<br>";
echo $persona1->getApellidos();
echo "<br>";
echo $persona1->getNumeroTelefonico();

# Instanciando una segunda persona
$persona2 = new Persona;
$persona2->setNombre("Rafael");
$persona2->setApellidos("De Los Matorrales");
$persona2->setNumeroTelefonico("54981981");
echo "<hr> Persona 2 <br>";
echo $persona2->getNombre();
echo "<br>";
echo $persona2->getApellidos();
echo "<br>";
echo $persona2->getNumeroTelefonico();
