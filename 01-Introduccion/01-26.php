<?php
$cars = ["Audi", "Seat", "Mercedes"];
function generateHtmlList($data) {
    $htmlList = "<ul>";
    do {
        $htmlList .= "<li>";
        $htmlList .= $data[0];
        array_shift($data);
        $htmlList .= "</li>";
    } while (count($data) !== 0);
    $htmlList .= "</ul>";
    return $htmlList;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 26</title>
</head>
<body>
    <p>
        26. Crea un array con marcas de coches y una función que imprima por pantalla
        una lista con todos los nombres utilizando la sentencia do-while.
    </p>
    <?php
    echo generateHtmlList($cars);
    ?>
</body>
</html>