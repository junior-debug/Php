<?php

class persona
{
    public $nombre = ""; //propiedades//
    private $edad = ""; //propiedades privadas//
    protected $altura = ""; //propiedades protegidas//

    public function asignarNombre($nombre) //metodos//
    {
        $this->nombre = $nombre;
    }
    public function imprimirNombre()
    {
        echo "hola soy" . " " . $this->nombre;
    }
    public function asignarEdad($edad)
    {
        $this->edad = $edad;
        return $this->edad;
    }
}

$objAlumno = new persona(); //instanciar objeto//
$objAlumno->asignarNombre("juan"); //llamar un metodo//
$objAlumno->imprimirNombre();
echo $objAlumno->asignarEdad(20);
