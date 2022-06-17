<?php

$frutas = array("m" => "manzana", "p" => "pera", "u" => "uva", "n" => "naranja", "s" => "sandia");

print_r($frutas);

foreach ($frutas as $key => $value) {
    echo $key . " " . $value . "<br>";
}
