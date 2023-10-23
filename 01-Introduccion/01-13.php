<?php
/*
 13. Crea dos arrays, uno con 4 tipos de animales ($animales) y otro con 4
nombres de colores ($colores).
    ■ Calcula el número de elementos de cada array.
    ■ Añade un elemento al final del array $animales utilizando una función.
    ■ Añade un elemento al principio del array $colores utilizando una función.
    ■ Crea un tercer array que incluya los elementos de los dos arrays.
*/

$animales = ["Peces", "Anfibios", "Reptiles", "Aves"];
$colores = ["Rojo", "Verde", "Azul", "Amarillo"];

echo "<p>Números de animales: " . count($animales) . "</p>";
echo "<p>Números de colores: " . count($colores) . "</p>";
array_push($animales, "Insectos");
array_unshift($colores, "Morado");

$tercerArray = array_merge($animales, $colores);