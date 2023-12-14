<?php

class Proveedor extends Persona2
{
    private $rubroDeVentas;

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
