<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3</title>
</head>
<body>
<p>
    Crea un programa que muestre el nombre de usuario enviado en la URL: Bienvenido, admin
</p>
<?php
$nombre = $_GET["nombre"];
echo "<p>Bienvenido: $nombre</p>"
?>
</body>
</html>
