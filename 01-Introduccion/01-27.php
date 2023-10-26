<?php
$musicGroups = [
    "Grupo1" => "Banda1",
    "Grupo2" => "Banda2",
    "Grupo3" => "Banda3",
    "Grupo4" => "Banda4",
    "Grupo5" => "Banda5",
    "Grupo6" => "Banda6",
    "Grupo7" => "Banda7",
    "Grupo8" => "Banda8"
];

function generateHtmlList($data) {
    $htmlList = "<ul>";
    foreach ($data as $key => $value) {
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
    <title>Ejercicio 27</title>
</head>
<body>
<p>
    27. Crea un array con el nombre de 8 grupos de música y una función que
    imprima por pantalla todos los elementos utilizando la estructura foreach.
</p>
<?php
echo generateHtmlList($musicGroups);
?>
</body>
</html>
