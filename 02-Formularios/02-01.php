<?php

$value = $_POST["value"] ?? 0;
$unit = $_POST["unit"] ?? "";

function convertTemperature($unit, $value) {
    if ($unit === "celsius") {
        return ($value * 9/5)  + 32;
    } else if ($unit === "farenheit")
        return ($value - 32) * 5/9;
    return NAN;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 1</title>
    <style>
        form {
            width: min(20rem, 100%);
            display: grid;
            gap: 1rem;
        }
    </style>
</head>
<body>
<p>
    01. Crea un convertidor de grados Celsius a Farenheit (y viceversa). La aplicación
    pedirá una cantidad al usuario y la unidad mediante un formulario. Una vez enviado,
    mostrará el resultado de la conversión realizada. El formulario siempre se mostrará,
    de forma que el usuario pueda seguir introduciendo valores.
</p>
<p>El resultado es:
    <?php
    echo convertTemperature($unit, $value);
    ?>
</p>
<form method="post">
    <label>Introduce la temperatura: <input type="number" name="value"></label>
    <label>
        Introduce la unidad de la temperatura introducida:
        <select name="unit">
            <option value="celsius">Grados Celsius</option>
            <option value="farenheit">Grados Farenheit</option>
        </select>
    </label>
    <button type="submit">Calcular</button>
</form>

</body>
</html>
