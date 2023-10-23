<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 9</title>
</head>
<body>
<p>
    09. Escribe una función que reciba como parámetro dos cadenas de texto y
    devuelva la concatenación de dichas cadenas. Muestra el resultado obtenido
    por pantalla.
</p>
<?php
function concatenar($valor1, $valor2) {
    return "$valor1 $valor2";
}

$cadena1 = $_GET["cadena1"];
$cadena2 = $_GET["cadena2"];

echo concatenar($cadena1, $cadena2);
?>
</body>
</html>
