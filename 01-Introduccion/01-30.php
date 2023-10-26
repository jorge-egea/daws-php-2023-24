<?php
$studentGrades = [
    "Julen" => 6.8,
    "Maria" => 8.5,
    "Pablo" => 7.2,
    "Luisa" => 9.3,
    "Carlos" => 5.6,
    "Ana" => 7.8
];

function generateHtmlList($data) {
    $htmlList = "<ul>";
    foreach ($data as $key => $value) {
        $htmlList .= "<li>";
        $htmlList .= "La nota media de " . $key . " es " . $value;
        $htmlList .= "</li>";
    }
    $htmlList .= "</ul>";
    return $htmlList;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 30</title>
</head>
<body>
<p>
    30. Crea un array asociativo con el nombre de 6 estudiantes y la nota media de
    cada uno. Recorre el array utilizando la estructura foreach y mostrando una lista
    con frases con la siguiente estructura: “La nota media de Julen es 6.8”
</p>
<?php
echo generateHtmlList($studentGrades);
?>
</body>
</html>