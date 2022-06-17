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
        echo "hola soy" . " " . $this->nombre . "<br>";
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
echo $objAlumno->asignarEdad(20) . "<br>";

//herencia//

class trabajador extends persona
{
    public $puesto = "";

    public function presentarse()
    {
        echo "Hola soy un trabajador y mi nombre es " . $this->nombre . " y mi puesto es " . $this->puesto;
    }
}

$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("juan");
$objTrabajador->puesto = "programador";
$objTrabajador->presentarse();
