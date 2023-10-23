<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 7</title>
</head>
<body>
    <p>
        07. ¿Cómo mejorarías el ejercicio anterior para que la función sea más reutilizable?
        Piénsalo bien y modifica la función.
    </p>
    <?php
    function suma($num1, $num2) {
        return $num1 + $num2;
    }
    $a = $_GET["a"];
    $b = $_GET["b"];

    echo "La suma es: " . suma($a, $b);
    ?>
</body>
</html>
