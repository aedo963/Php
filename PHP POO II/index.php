<?php

require_once("clases/Persona2.php");
require_once("clases/Cliente.php");


#Creando cliente que hereda de la clase persona
$cliente = new Cliente;
$cliente->setNombre("Mario");
echo $cliente->getNombre();
echo "<br>";
$cliente->setRegimenTributario("Persona Natural");
echo $cliente->getRegimenTributario();
