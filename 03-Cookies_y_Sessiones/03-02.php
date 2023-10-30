<?php
if (isset($_GET["delete"]))
    setcookie("text", "", time() - 3600);

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
<a href="03-02.php?delete=1">Eliminar cookie</a>
</body>
</html>