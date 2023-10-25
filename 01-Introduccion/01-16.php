<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="author" content="Jorge Egea">
    <title>Ejercicio 16</title>
</head>
<body>
<p>
    16. Crea una función que reciba 2 números obtenidos mediante GET. La aplicación
    deberá realizar la siguiente operación:
</p>
<ul>
    <li>Si los números son distintos, mostrará el resultado de su suma.</li>
    <li>Si los números son iguales, mostrará el resultado de su multiplicación.</li>
</ul>
</body>
<?php
function procesarNumeros($numA, $numB) {
    if ($numA <> $numB) return $numA + $numB;
    else if ($numA === $numB) return $numA * $numB;
    return null;
}



if (isset($_GET["numA"]) && isset($_GET["numB"])) {
    $numA = $_GET["numA"];
    $numB = $_GET["numB"];
    echo "Resultado: " . procesarNumeros($numA, $numB);
}

?>
</html>