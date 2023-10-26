<?php
$contacts = [
    [
        "name" => "Amaia",
        "surname" => "Gorbea Jainaga",
        "phone" => 945010101,
        "email" => "agorbea@php.net"
    ],
    [
        "name" => "NewName",
        "surname" => "NewSurname",
        "phone" => 123456789,
        "email" => "newemail@example.com"
    ],
    [
        "name" => "John",
        "surname" => "Doe",
        "phone" => 5551234567,
        "email" => "johndoe@example.com"
    ],
    [
        "name" => "Alice",
        "surname" => "Smith",
        "phone" => 9876543210,
        "email" => "alice.smith@example.com"
    ],
    [
        "name" => "Bob",
        "surname" => "Johnson",
        "phone" => 7778889999,
        "email" => "bob.johnson@example.com"
    ],
    [
        "name" => "Emma",
        "surname" => "Wilson",
        "phone" => 3337773333,
        "email" => "emma.wilson@example.com"
    ],
    [
        "name" => "David",
        "surname" => "Brown",
        "phone" => 1112223333,
        "email" => "david.brown@example.com"
    ],
    [
        "name" => "Olivia",
        "surname" => "Taylor",
        "phone" => 5555555555,
        "email" => "olivia.taylor@example.com"
    ],
    [
        "name" => "William",
        "surname" => "Miller",
        "phone" => 9998887777,
        "email" => "william.miller@example.com"
    ],
    [
        "name" => "Sophia",
        "surname" => "Clark",
        "phone" => 4447778888,
        "email" => "sophia.clark@example.com"
    ],
    [
        "name" => "Liam",
        "surname" => "Moore",
        "phone" => 6669991111,
        "email" => "liam.moore@example.com"
    ]
];
function createTable($data) {
    if (count($data) > 0) {
        $dataKeys = array_keys($data[0]);
        $htmlTable = "<table border='1'>";
        $htmlTable .= "<thead>";
        $htmlTable .= "<tr>";
        foreach ($dataKeys as $key) {
            $htmlTable .= "<th>";
            $htmlTable .= $key;
            $htmlTable .= "</th>";
        }
        $htmlTable .= "</tr>";
        $htmlTable .= "</thead>";
        $htmlTable .= "<tbody>";
        foreach ($data as $row) {
            $htmlTable .= "<tr>";
            foreach ($dataKeys as $key) {
                $htmlTable .= "<td>";
                $htmlTable .= $row[$key];
                $htmlTable .= "</td>";
            }
            $htmlTable .= "</tr>";
        }
        $htmlTable .= "</tbody>";
        $htmlTable .= "</table>";
        echo $htmlTable;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 29</title>
</head>
<body>
<p>
    24. Crea un array multidimensional que simule una agenda de contactos (contendrá de cada
    persona su nombre, apellidos, teléfono y dirección de correo electrónico). Implementa una
    función que imprima en una tabla los datos de las personas utilizando la sentencia for.
    Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer.
</p>
<?php
createTable($contacts);
?>
</body>
</html>
