<?php
session_start();

$product = NULL;

if (isset($_GET["product"]))
    $product = $_GET["product"];

if (isset($product)) {
    if (isset($_SESSION["list"]))
        $_SESSION["list"][] = $product;
    else
        $_SESSION["list"] = [$product];
}

function generateHtmlList() :string {
    if (!isset($_SESSION["list"]))
        return "<p>No hay productos en la cesta</p>";
    $htmlList = "<ul>";
    foreach ($_SESSION["list"] as $value)
        $htmlList .= "<li>" . $value . "</li>";
    $htmlList .= "</ul>";
    return $htmlList;
}

$idioma = NULL;

if (isset($_POST["idioma"])) {
    $idioma = $_POST["idioma"];
    setcookie("idioma", $idioma);
}

function mensajeDeBienvenida() {
    if ( isset($idioma) )
        switch ($idioma) {
            case "castellano":
                return "<h1>Bienvenido</h1>";
            case "euskera":
                return "<h1>Ongi etorri</h1>";
        }
    if ( isset($_POST["idioma"])) {
        switch ($_POST["idioma"]) {
            case "castellano":
                return "<h1>Bienvenido</h1>";
            case "euskera":
                return "<h1>Ongi etorri</h1>";
        }
    }
    return "";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 07</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border-top: 1px solid black;
            padding: 1em;
        }
    </style>
</head>
<body>
<header>
    <h1>
        <?=mensajeDeBienvenida()?>
    </h1>
</header>
<form method="post">
    <label for="idioma">Idioma</label>
    <select id="idioma" name="idioma">
        <option value="castellano">Castellano</option>
        <option value="euskera">Euskera</option>
    </select>
    <br>
    <button type="submit">Cambiar idioma</button>
</form>
<article>
    <h1>Cesta de la compra</h1>
    <?=generateHtmlList()?>
</article>
<h1>Catálogo de productos</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
    </tr>
    <tr>
        <td>Producto 1</td>
        <td>Descripción producto 1</td>
        <td>5€</td>
        <td><a href="?product=Producto-1">Añadir</a></td>
    </tr>
    <tr>
        <td>Producto 2</td>
        <td>Descripción producto 2</td>
        <td>10€</td>
        <td><a href="?product=Producto-2">Añadir</a></td>
    </tr>
    <tr>
        <td>Producto 3</td>
        <td>Descripción producto 3</td>
        <td>5€</td>
        <td><a href="?product=Producto-3">Añadir</a></td>
    </tr>
</table>
</body>
</html>