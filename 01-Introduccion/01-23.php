<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 23</title>
</head>
<body>
<p>
    23. Crea un array con un listado de estudiantes (Ane, Markel, Nora, Danel, Amaia, Izaro). A
    continuación recorre el array mediante un FOR, generando una lista HTML como la siguiente:
    Ahora añade un atributo “id” a cada elemento de la lista. Por ejemplo:
    &gt;li&lt; id="1">Ane&gt;/li&lt;
</p>
<?php
$students = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];
function generateHtmlList($listItems) {
    $htmlString = "<ul>";
    for ($i = 0; $i < count($listItems); ++$i) {
        $htmlString .= "<li id='" . $i . "'>" . $listItems[$i] . "</li>";
    }
    $htmlString .= "</ul>";
    return $htmlString;
}

echo generateHtmlList($students);
?>
</body>
</html>