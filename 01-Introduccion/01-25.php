<?php
$contacts = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];
function generateHtmlList($data) {
    $htmlList = "<ul>";
    while(count($data) !== 0) {
        $htmlList .= "<li>";
        $htmlList .= $data[0];
        array_shift($data);
        $htmlList .= "</li>";
    }
    $htmlList .= "</ul>";
    return $htmlList;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 25</title>
</head>
<body>
<p>
    25. Crea un array con un listado de estudiantes (Ane, Markel, Nora, Danel, Amaia, Izaro). A
    continuación recorre el array utilizando una estructura de control WHILE generando una lista
    HTML como la siguiente:
</p>
<?php
echo generateHtmlList($contacts);
?>
</body>
</html>