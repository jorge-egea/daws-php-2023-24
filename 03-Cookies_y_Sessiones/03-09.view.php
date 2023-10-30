<?php
$datos = [
    "p1" => [
        "descripcion" => "descripción extendida de producto 1",
        "cod_ref" => "código de referencia"
    ],
    "p2" => [
        "descripcion" => "descripción extendida de producto 2",
        "cod_ref" => "código de referencia"
    ],
    "p3" => [
        "descripcion" => "descripción extendida de producto 3",
        "cod_ref" => "código de referencia"
    ]
];
$product = NULL;

if (isset($_GET["producto"])) {
    $product = $_GET["producto"];
}

function generateHtml($cod, $dataSource) {
    if (!array_key_exists($cod, $dataSource)) return "";
    return "<p>" . $dataSource[$cod]["descripcion"] . "</p><p>".$dataSource[$cod]["cod_ref"]."</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 09</title>
</head>
<body>
<?php
if (isset($product))
    echo generateHtml($product, $datos);
?>
<a href="03-07.php">Volver</a>
</body>
</html>


