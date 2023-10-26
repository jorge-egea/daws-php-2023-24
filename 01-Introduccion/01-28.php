<?php
$cars = ["Audi", "Seat", "Mercedes"];
function generateHtmlList($data) {
    $htmlList = "<ul>";
    foreach ($data as $value) {
        $htmlList .= "<li>";
        $htmlList .= $value;
        $htmlList .= "</li>";
    }
    $htmlList .= "</ul>";
    return $htmlList;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 28</title>
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