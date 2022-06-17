<?php
session_start();

if (isset($_SESSION['usuario'])) {
    echo "usuario: " . $_SESSION['usuario'] . "<br>";
    echo "estatus: " . $_SESSION['estatus'] . "<br>";
} else {
    echo 'la sesion ah sido destruida';
}
