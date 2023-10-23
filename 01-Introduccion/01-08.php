<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 8</title>
</head>
<body>
<p>
    08. Crea una función llamada esMayor() que reciba como parámetros dos
    números y devuelva TRUE si el primer número es mayor que el segundo.
</p>
<?php
    function esMayor($num1, $num2) {
        return $num1 > $num2;
    }

    echo var_export(esMayor(2, 1));
?>
</body>
</html>
