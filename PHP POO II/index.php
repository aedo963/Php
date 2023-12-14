<?php

require_once("clases/Persona2.php");
require_once("clases/Cliente.php");
require_once("clases/Proveedor.php");


#Creando cliente que hereda de la clase persona
/* $cliente = new Cliente;

$cliente->setNombre("Mario");
echo $cliente->getNombre();
echo "<br>";
$cliente->setRegimenTributario("Persona Natural");
echo $cliente->getRegimenTributario();
echo "<br>";
echo $cliente->getTipoDocumento(); */

//$cliente->print();


$proveedor = new Proveedor;
$proveedor->getRubroDeVentas();
echo "<hr>";
echo $proveedor->getTipoDocumento();
//$proveedor->print();
