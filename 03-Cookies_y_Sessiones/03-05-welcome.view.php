<!DOCTYPE html>
<html lang="es">
<head>
    <title>Bienvenido</title>
</head>
<body>
<?php
echo "<p>Bienvenido ". $_SESSION["usuario"] . "</p>";
?>
<a href="03-05.php?logout=1">Cerrar sesión</a>
</body>
</html>