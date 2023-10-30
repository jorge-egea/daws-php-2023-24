<?php


$lista = NULL;
if (isset($_POST["asistente"])) {
    if (isset($_COOKIE["lista"])) {
        $lista = unserialize($_COOKIE["lista"]);
        $lista[] = $_POST["asistente"];
        setcookie("lista", serialize($lista));
    } else {
        $lista = [$_POST["asistente"]];
        setcookie("lista", serialize($lista));
    }
}

if (!isset($lista) && isset($_COOKIE["lista"]))
    $lista = unserialize($_COOKIE["lista"]);

if (isset($_POST["delete"])) {
    setcookie("lista", "", -3600);
    $lista = NULL;
}

function generarLista($datos) :string {
    $htmlList = "<ul>";
    foreach ($datos as $value) {
        $htmlList .= "<li>" . $value . "</li>";
    }
    $htmlList .= "</ul>";
    return $htmlList;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 04</title>
</head>
<body>
<?php
if (isset($lista)) echo generarLista($lista);
?>
<form method="post">
    <label for="asistente">Añadir asistente</label>
    <input id="asistente" name="asistente">
    <button type="submit">Añadir</button>
</form>
<form method="post">
    <input type="hidden" value="delete" name="delete">
    <button type="submit">Eliminar lista</button>
</form>

</body>
</html>
