<?php

class persona
{
    public $nombre = ""; //propiedades//
    private $edad = ""; //propiedades privadas//
    protected $altura = ""; //propiedades protegidas//

    function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function asignarNombre($nombre) //metodos//
    {
        $this->nombre = $nombre;
    }
    public function imprimirNombre()
    {
        echo "hola soy" . " " . $this->nombre . "<br>";
    }
    public function asignarEdad($edad)
    {
        $this->edad = $edad;
        return $this->edad;
    }
}

$objAlumno = new persona("jose"); //instanciar objeto//
$objAlumno->imprimirNombre();
