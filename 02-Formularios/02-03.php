<?php
$number = $_POST["number"] ?? -1;
$inputRandom = explode(" ", $_POST["random"] ?? 0);
$randomNumbers = [];
for ($i = 0; $i < 20; $i++) {
    array_push($randomNumbers, random_int(1, 10));
}

function countOccurrences($array, $number): int {
    $count = 0;
    foreach ($array as $value) {
        if ($number === $value)
            $count += 1;
    }
    return $count;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 03</title>
</head>
<body>
<p>
    03. Crea un array con 20 números aleatorios entre el 1 y el 10 utilizando la función
    random_int(). El usuario introducirá en el formulario un número y al darle a “Enviar”
    la aplicación comprobará cuántas veces aparece el número introducido en el array.
</p>
<p>El número aparece: <?=countOccurrences($inputRandom, $number)?></p>
<form method="post">
    <label>Introduce tú número: <input type="number" name="number"></label>
    <input style="display: none" value="<?php echo implode(" ", $randomNumbers)?>" name="random">
    <button type="submit">Probar suerte</button>
</form>
<p> <?php echo implode(", ", $randomNumbers)?></p>
</body>
</html>