<?php

function imprimirNombre($nombre, $apellido = "")
{
    //instrucciones//
    echo "Hola " . $nombre . " " . $apellido . "<br/>";
}

//llamar a la funcion//
imprimirNombre("oscar");
imprimirNombre("pedro", "perez");
imprimirNombre("manuel", "martinez");
