<?php

namespace Ejemplo3;

class Persona
{
    //private $nombre;
    //private $apellido;
    //private $numeroTelefonico;

    function __construct(private $nombre, private $apellido, private $numeroTelefonico)
    {
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        #retorna al objeto
        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */
    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of numeroTelefonico
     */
    public function getNumeroTelefonico()
    {
        return $this->numeroTelefonico;
    }

    /**
     * Set the value of numeroTelefonico
     */
    public function setNumeroTelefonico($numeroTelefonico): self
    {
        $this->numeroTelefonico = $numeroTelefonico;

        return $this;
    }
}
