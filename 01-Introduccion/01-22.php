<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 21</title>
</head>
<body>
<p>
    22. Crea un array con nombres de países y a continuación una función que reciba
    el nombre de un país y recorra el array, comprobando valor por valor si alguno de
    ellos es igual al del parámetro recibido. Devolverá la posición en la que se
    encuentre (en caso de no encontrarlo devolverá -1).

    [“Brasil”, “Portugal”, “Islandia”, “Mexico”, “Filipinas”, “Marruecos”]

    encontrarPosicion(“Islandia”) → 3
    encontrarPosicion(“Dinamarca”) → -1
    Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer.
</p>
<?php
$countries = ["Brasil", "Portugal", "Islandia", "Mexico",  "Filipinas", "Marruecos"];

function findArrayElement($element, $array) {
    for ($i = 0; $i < count($array); ++$i) {
        if ($array[$i] === $element) return $i;
    }
    return -1;
}

if (isset($_GET["pais"])) {
    echo "<p>" . $_GET["pais"] . " se encuentra en la posición " . findArrayElement($_GET["pais"], $countries);
}
?>
</body>
</html>