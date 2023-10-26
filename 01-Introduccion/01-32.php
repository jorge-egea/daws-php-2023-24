<?php
$studentNotes = [
    "Luis Scola" => [
        9, 8
    ],
    "Pablo Prigioni" => [
        8, 4
    ],
    "Sergi Vidal" => [
        7, 6
    ],
    "Ramón Rivas" => [
        3.5, 6
    ]
];

function calculateAverage($array) {
    if (count($array) > 0) {
        $sum = array_sum($array);
        $average = $sum / count($array);
        return $average;
    }
    return 0;
}

function generateHtmlTable($data) {
    $htmlTable = "<table>";
    $htmlTable .= "<tr>";
    $htmlTable .= "<td>";
    $htmlTable .= "Nombre";
    $htmlTable .= "</td>";
    $htmlTable .= "<td>";
    $htmlTable .= "Nota 1";
    $htmlTable .= "</td>";
    $htmlTable .= "<td>";
    $htmlTable .= "Nota 2";
    $htmlTable .= "</td>";
    $htmlTable .= "<td>";
    $htmlTable .= "Media";
    $htmlTable .= "</td>";
    $htmlTable .= "</tr>";

    foreach ($data as $key => $value) {
        $htmlTable .= "<tr>";
        $htmlTable .= "<td>" . $key . "</td>";
        $value[0] < 5?
            $htmlTable .= "<td style='color: red'>" . $value[0] . "</td>"
            : $htmlTable .= "<td>" . $value[0] . "</td>";
        $value[1] < 5?
            $htmlTable .= "<td style='color: red'>" . $value[1] . "</td>"
            : $htmlTable .= "<td>" . $value[1] . "</td>";
        calculateAverage($value) < 5 ?
            $htmlTable .= "<td style='color: red'>" . calculateAverage($value) . "</td>"
            : $htmlTable .= "<td>" . calculateAverage($value) . "</td>";
        $htmlTable .= "</tr>";
    }

    $htmlTable .= "</table>";
    return $htmlTable;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 32</title>
</head>
<body>
<p>
    32. Crea un array asociativo que almacene los nombres de 4 estudiantes y las
    notas de dos exámenes. A continuación, crea de forma dinámica una tabla
    como la de la imagen utilizando los valores del array y la estructura de
    repetición que creas conveniente. Cuando la nota sea inferior a 5, esta deberá
    mostrarse en rojo.
</p>
<?php
echo generateHtmlTable($studentNotes);
?>
</body>
</html>