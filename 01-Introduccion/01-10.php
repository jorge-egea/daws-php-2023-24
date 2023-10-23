<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 10</title>
</head>
<body>
<p>
    10. Modifica la función anterior para que establezca un valor por defecto a una
    de las cadenas
</p>
<?php
function concatenar($valor1, $valor2 = "valor por defecto") {
    return "$valor1 $valor2";
}

$cadena1 = $_GET["cadena1"];
echo concatenar($cadena1);
?>
</body>
</html>
