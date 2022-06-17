<?php

$server = "localhost"; //127.0.0.1//
$user = "root";
$pass = "";

try {
    $conexion = new PDO("mysql:host=$server;dbname=album", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");

    //insertar datos//

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programacion', 'foto.jpg');";

    $conexion->exec($sql);

    echo "conexion establecida";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
