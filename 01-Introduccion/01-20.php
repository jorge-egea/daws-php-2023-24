<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 20</title>
</head>
<body>
<p>
    20. Modifica el programa anterior para que sume únicamente los números pares
</p>
<?php
function sum($number) {
    $totalSum = 0;
    for ($i = 0; $i <= $number; ++$i) {
        if ($i % 2 === 0) $totalSum += $i;
    }
    return $totalSum;
}

if (isset($_GET["numero"])) {
    echo "<p>" . sum($_GET["numero"]) . "</p>";
}
?>
</body>
</html>

