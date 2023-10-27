<?php
$n1 = $_POST["n1"] ?? 0;
$n2 = $_POST["n2"] ?? 0;
$operation = $_POST["operation"] ?? "";

function arithmeticCalculator($operation, $numberA, $numberB) {
    switch ($operation) {
        case "sum":
            return $numberA + $numberB;
        case "subtraction":
            return $numberA - $numberB;
        case "multiplication":
            return $numberA * $numberB;
        case "division":
            return $numberA / $numberB;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 02</title>
    <style>
        form {
            display: grid;
            gap: 1rem;
            width: min(20rem, 100%);

        }
    </style>
</head>
<body>
<p>
    02. Crea una aplicación que simule una
    calculadora. La calculadora estará
    representada por un formulario con dos
    campos numéricos y un desplegable
    para indicar la operación que se desea
    realizar (suma, resta, multiplicación o
    división). La aplicación deberá mostrar el
    resultado de la operación realizada y
    mostrar un mensaje de error cuando se
    intente dividir entre cero.
</p>
<p>
    Último resultado: <?php echo arithmeticCalculator($operation, $n1, $n2)?>
</p>
<form method="post">
    <label>Primer número: <input type="number" name="n1"></label>
    <label>Segundo número: <input type="number" name="n2"></label>
    <label>
        Selecciona la operación deseada:
        <select name="operation">
            <option value="sum">Suma</option>
            <option value="subtraction">Resta</option>
            <option value="multiplication">Multiplicación</option>
            <option value="division">División</option>
        </select>
    </label>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
