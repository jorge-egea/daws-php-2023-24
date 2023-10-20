<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
</head>
<body>
<p>
    04. Modifica el ejercicio 02 para que recoja el nombre y la edad desde la URL. Es
    decir, para probar la página la URL será como la siguiente:
</p>
<?php
$nombre = $_GET["nombre"];
$edad = $_GET["edad"];
echo "<p>Mi amigo $nombre tiene $edad años</p>"
?>
</body>
</html>
