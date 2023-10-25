<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 21</title>
</head>
<body>
<p>
    21. Modifica el programa anterior de forma que en el momento en el que la suma
    sea mayor que 100, devuelva el último valor antes de superar 100.
</p>
<?php
function sum($number) {
    $totalSum = 0;
    for ($i = 0; $i <= $number; ++$i) {
        if ($i % 2 === 0) {
            if ($totalSum + $i > 100) return $totalSum;
            $totalSum += $i;
        }
    }
    return $totalSum;
}

if (isset($_GET["numero"])) {
    echo "<p>" . sum($_GET["numero"]) . "</p>";
}
?>
</body>
</html>
