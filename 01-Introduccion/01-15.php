<?php
/*
    15. Crea un array multidimensional llamado “diccionario” que almacene para
    cada usuario su nombre, apellidos e email. A continuación crea una función
    llamada “getDatos() ” que reciba como primer parámetro el nombre de
    usuario y como segundo parámetro el dato a obtener (“nombre”, “apellidos” o
    “email”) y lo muestre por pantalla
*/

$diccionario = [
    'usuario1' => [
        'nombre' => 'Juan',
        'apellidos' => 'Pérez',
        'email' => 'juan@example.com',
    ],
    'usuario2' => [
        'nombre' => 'María',
        'apellidos' => 'López',
        'email' => 'maria@example.com',
    ],
];

function getDatos($nombreUsuario, $campo) {
    global $diccionario;
    echo "El $campo de $nombreUsuario es: " . $diccionario[$nombreUsuario][$campo];
}

getDatos('usuario1', 'nombre');
getDatos('usuario2', 'email');




