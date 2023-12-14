<?php

class Cliente extends Persona2
{

    # Sobreescritura del metodo getNombre
    # Le estamos dando un comportamiento diferente al que tiene en la clase Persona2
    /* public function getNombre()
    {
        return strtolower($this->nombre);
    } */

    # Sobreescritura tomando en cuenta su funcionamiento original
    public function getNombre()
    {
        # Agregando funcionalidad extra
        echo "El nombre del cliente es: ";
        # Copiando el mismo funcionamiento original
        return parent::getNombre();
    }
}
