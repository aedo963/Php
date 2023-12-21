<?php


namespace Utils;

final class Utils
{

    #Esta propiedad solamente ocupa un espacio en memoria y no puede ser sobreescrita
    public static $nombreDeLaApp = "Mi App Grandiosa";

    final public static function imprimir($algoParaImprimir)
    {
        echo $algoParaImprimir;
    }
    final public function imprimirSaltodeLinea()
    {
        echo "<br>";
    }
    final public function imprimirLineaDivisoria()
    {
        echo "<hr>";
    }
}
