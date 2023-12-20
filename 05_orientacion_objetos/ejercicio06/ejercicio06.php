<?php

function dividir(int | float $dividiendo, int | float $divisor): float {
    if ($divisor === 0) throw new ValueError("Parámetro no válido [" . $divisor . "]");
    return $dividiendo / $divisor;
}

try {
    echo dividir(1, 3) . "\n";
    echo dividir(1, 2) . "\n";
    echo dividir(1, 1) . "\n";
    echo dividir(1, 0) . "\n";
} catch (ValueError $exception) {
    echo "Ha ocurrido un error: \n" . $exception->getMessage();
}
