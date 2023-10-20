<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    05. Crea dos variables, a y b que recojan los valores enviados mediante el método
    GET. Almacena el resultado de las siguientes operaciones en nuevas variables y
    muéstralas por pantalla.
    ○ Resta de a y b
    ○ División de a entre b
    ○ Resultado de a mayor que b
    ○ Resultado de a menor o igual que b
    Nota: para imprimir una variable con valor booleano, utiliza la función
</p>
<?php
$a = $_GET["a"];
$b = $_GET["b"];
echo "<p>Resta: " . ($a - $b). "</p>";
echo "<p>División: " . ($a / $b) . "</p>";
echo "<p>a > b: " . var_export($a > $b, true) . "</p>";
echo "<p>a < b: " . var_export($a < $b, true) . "</p>";
?>
</body>
</html>