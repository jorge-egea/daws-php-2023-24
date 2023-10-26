<?php
$randomNumbers = [];
for ($i = 0; $i < 20; ++$i) {
    $random_int = random_int(1, 999);
    array_push($randomNumbers, $random_int);
}
function generateHtmlList($data) {
    $htmlList = "<ul>";
    $htmlList .= "<li>";
    $htmlList .= "El array generado es: ";
    foreach ($data as $key) {
        $htmlList .= $key . ", ";
    }
    $htmlList .= "</li>";
    $htmlList .= "<li>";
    $htmlList .= "El valor mínimo es: " . min($data);
    $htmlList .= "</li>";
    $htmlList .= "<li>";
    $htmlList .= "El valor máximo es: " . max($data);
    $htmlList .= "</li>";
    $htmlList .= "</ul>";
    return $htmlList;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 31</title>
</head>
<body>
<p>
    31. Crea una aplicación que genere un array con 20 números aleatorios con valores entre 1 y
    999, utilizando la función random_int(1, 999) para generar los valores. A continuación
    recorre el array utilizando la sentencia foreach y muestra por pantalla el valor más alto y el
    más bajo.
</p>
<?php
echo generateHtmlList($randomNumbers);
?>
</body>
</html>
