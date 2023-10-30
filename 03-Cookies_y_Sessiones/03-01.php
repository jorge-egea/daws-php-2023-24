<?php
if (isset($_GET["text"]))
    $text = $_GET["text"];

if (isset($text))
    setcookie("text", $text);

function getMessage() :string {
    if (!isset($_COOKIE["text"])) return "<p>No hay ningún texto</p>";
    $cookieText = $_COOKIE["text"];
    return "<p>Texto: " . $cookieText . "</p>";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 1</title>
</head>
<body>
<?=getMessage()?>
<form method="get">
    <label>Introduce el texto que deseas almacenar: <input name="text"></label>
    <button type="submit">Guardar</button>
</form>
</body>
</html>