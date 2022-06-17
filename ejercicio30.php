<?php

$server = "localhost"; //127.0.0.1//
$user = "root";
$pass = "";

try {
    $conexion = new PDO("mysql:host=$server;dbname=album", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");

    //recibir datos//

    $sql = "SELECT * FROM `fotos` ";

    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    print_r($resultado);

    foreach ($resultado as $foto) {
        echo $foto['nombre'] . "<br>";
    }

    for ($i = 0; $i < count($resultado); $i++) {
        echo $resultado[$i]['id'] . "<br>";
    }

    echo "conexion establecida";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
