<?php
$amountOfProduct1 = $_POST["producto1"] ?? 0;
$amountOfProduct2 = $_POST["producto2"] ?? 0;
$amountOfProduct3 = $_POST["producto3"] ?? 0;

function calculateTotalAmount($amountP1, $amountP2, $amountP3) {
    $total = 0;
    $total += $amountP1 * 5;
    $total += $amountP2 * 10;
    $total += $amountP3 * 15;
    return $total;
}

function generateHtmlListOfProducts($amountP1, $amountP2, $amountP3) {
    if ($amountP1 + $amountP2 + $amountP3 > 0) {
        $htmlList = "<ul>";
        if($amountP1 > 0)
            $htmlList .= "<li>Producto 1 (" . $amountP1 . ")</li>";
        if($amountP2 > 0)
            $htmlList .= "<li>Producto 2 (" . $amountP2 . ")</li>";
        if($amountP3 > 0)
            $htmlList .= "<li>Producto 3 (" . $amountP3 . ")</li>";
        $htmlList .= "</ul>";
        return $htmlList;
    }
    return "";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 05</title>
</head>
<body>
<h1>Precio total:</h1>
<p>El importa total es de: <?=calculateTotalAmount($amountOfProduct1, $amountOfProduct2, $amountOfProduct3)?>€</p>
<h1>Detalle de la compra:</h1>
<?=generateHtmlListOfProducts($amountOfProduct1, $amountOfProduct2, $amountOfProduct3)?>
<a href="02-05.html">Volver a la tienda</a>
</body>
</html>

