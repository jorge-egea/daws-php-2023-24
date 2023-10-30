<?php
if (isset($_GET["idioma"])) {
    setcookie("idioma", $_GET["idioma"]);
}

function mostrarMensaje() {
    if (!isset($_COOKIE["idioma"])) return "<p>Elige un idioma</p>";
    return "<p>Idioma: " . $_COOKIE["idioma"] ."</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 03</title>
</head>
<body>
<?=mostrarMensaje()?>
<form method="get">
    <label for="idioma">Idioma</label>
    <select name="idioma" id="idioma">
        <option value="castellano">Castellano</option>
        <option value="euskera">Euskera</option>
    </select>
    <button type="submit">Enviar</button>
</form>
</body>
</html>