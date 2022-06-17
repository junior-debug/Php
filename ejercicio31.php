<?php

session_start();

$_SESSION['usuario'] = "juan";
$_SESSION['estatus'] = "logueado";

echo "sesion iniciada";
