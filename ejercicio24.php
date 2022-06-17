<?php

class persona
{
    public $nombre = ""; //propiedades//

    public function asignarNombre($nombre) //metodos//
    {
        $this->nombre = $nombre;
    }
    public function imprimirNombre()
    {
        echo "hola soy" . " " . $this->nombre;
    }
}

$objAlumno = new persona(); //instanciar objeto//
$objAlumno->asignarNombre("juan"); //llamar un metodo//
$objAlumno->imprimirNombre();
