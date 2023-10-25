<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 19</title>
</head>
<body>
<p>
    19. Crea un programa que reciba un número y realice la suma de todos los
    números entre el 0 y el número dado (este incluido). Deberá mostrar el resultado.
</p>
<?php
function sum($number) {
    $totalSum = 0;
    for ($i = 0; $i <= $number; ++$i) {
        $totalSum += $i;
    }
    return $totalSum;
}

if (isset($_GET["numero"])) {
    echo "<p>" . sum($_GET["numero"]) . "</p>";
}
?>
</body>
</html>
