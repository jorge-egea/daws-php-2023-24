<?php

function calcularAreaCuadrado(int | float $ancho, int | float $largo): float {
    if ($ancho <= 0 || $largo <= 0) throw new ValueError("El lado del cuadrado no puede ser inferior a 0");
    return $ancho * $largo;
}

try {
    echo calcularAreaCuadrado(1, 3) . "\n";
    echo calcularAreaCuadrado(1, 2) . "\n";
    echo calcularAreaCuadrado(1, 1) . "\n";
    echo calcularAreaCuadrado(1, 0) . "\n";
} catch (ValueError $exception) {
    echo "Ha ocurrido un error: " . $exception->getMessage();
}
