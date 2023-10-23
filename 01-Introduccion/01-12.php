<?php
/*
12. Crea un array con 4 nombres de ciudades (Paris, Berlin, Amsterdam, Praga). A
continuación crea las siguientes funciones:

● getValor($array, $posicion) : recibe un número como parámetro y
    devuelve el valor almacenado en el array en dicho índice.
● setValor($array, $posicion, $valor) : establece el valor del
    elemento indicado en la posición y devuelve el array.
    Crea algunos ejemplos con llamadas a las dos funciones.
*/

$ciudades = ["Paris", "Berlin", "Amsterdam" , "Praga"];

function getValor($array, $posicion) {
    return $array[$posicion];
}

function setValor(&$array, $posicion, $valor) {
    $array[$posicion] = $valor;
}

echo "<p>" . getValor($ciudades, 0) . "</p>";

setValor($ciudades, 0, "Madrid");

echo "<p>" . getValor($ciudades, 0) . "</p>";

