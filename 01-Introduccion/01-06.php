<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 6</title>
</head>
<body>
<p>
    06. Crea una función llamada multiplicar que reciba dos variables, a y b, y muestre
    el resultado de la multiplicación por pantalla. Para probar el ejercicio se enviarán
    los valores mediante una petición GET.
</p>
<?php
function multiplicar($a, $b) {
    return $a * $b;
}

$a = $_GET["a"];
$b = $_GET["b"];

echo multiplicar($a, $b);
?>
</body>
</html>
