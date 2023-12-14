<?php

trait ClienteVIP
{

    abstract function comprarConTarjetaVIP();

    function comprarEnZonaVIP()
    {
    }
}

trait Cliente
{
    function comprarEnZonaNormal()
    {
    }
}

trait ClienteRey
{
    use ClienteVIP, Cliente;
}


#Herencia Simple
class Proveedor extends Persona2
{

    use ClienteVIP, Cliente;


    protected $tipoDocumento = "RUC";
    private $rubroDeVentas;



    function comprarConTarjetaVIP()
    {
    }

    function print()
    {
        echo "Hola desde Proveedor";
    }

    /**
     * Get the value of rubroDeVentas
     */
    public function getRubroDeVentas()
    {
        return $this->rubroDeVentas;
    }

    /**
     * Set the value of rubroDeVentas
     */
    public function setRubroDeVentas($rubroDeVentas): self
    {
        $this->rubroDeVentas = $rubroDeVentas;

        return $this;
    }
}
