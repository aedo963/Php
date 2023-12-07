<?php

declare(strict_types=1);
# define es para constantes
class Persona
{
    private $nombre, $apellidos, $numeroTelefonico;


    # Getter: Retornar los valores de las propiedades
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getNumeroTelefonico()
    {
        return $this->numeroTelefonico;
    }

    # Setter: Poner valores a las propiedades, incluso si estas son privadas
    public function setNumeroTelefonico(string $numeroTelefonicoParametro)
    {
        $this->numeroTelefonico = $numeroTelefonicoParametro;
    }

    public function setNombre(string $nombreParametro)
    {
        $this->nombre = $nombreParametro;
    }

    public function setApellidos(string $apellidosParametro)
    {
        $this->apellidos = $apellidosParametro;
    }

    ## Ejemplo
    ## persona1->setApellidos("De Los Matorrales")

}
