<?php

$jsonContenido = '[
    {
        "nombre": "Juan",
        "edad": "20",
        "genero": "masculino",
        "estado": "activo"
    },
    {
        "nombre": "Maria",
        "edad": "21",
        "genero": "femenino",
        "estado": "inactivo"
    },
    {
        "nombre": "Pedro",
        "edad": "22",
        "genero": "masculino",
        "estado": "activo"
    },
    {
        "nombre": "Ana",
        "edad": "23",
        "genero": "femenino",
        "estado": "inactivo"
    }
]';

$res = json_decode($jsonContenido, true);
print_r($res);

foreach ($res as $persona) {
    echo $persona['nombre'] . '<br>';
    echo $persona['edad'] . '<br>';
    echo $persona['genero'] . '<br>';
    echo $persona['estado'] . '<br>';
};

for ($i = 0; $i < count($res); $i++) {
    echo $res[$i]['nombre'] . '<br>';
    echo $res[$i]['edad'] . '<br>';
    echo $res[$i]['genero'] . '<br>';
    echo $res[$i]['estado'] . '<br>';
}
