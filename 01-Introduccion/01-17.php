<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Jorge Egea Nogueira">
    <title>Ejercicio 17</title>
</head>
<body>
<p>
    17. Crea una función que reciba un usuario y contraseña mediante GET. La
    aplicación deberá mostrar si el usuario existe, y en caso de existir si la contraseña
    recibida es correcta. La validación se realizará contra un array multidimensional
    como el siguiente:
</p>
</body>
<?php
$userCredentials = [
    "user" => [
        "username" => "jorge",
        "password" => "jorge"
    ]
];

function doesUserExist($username, $dataSource) {
    if ($username !== $dataSource["user"]["username"]) return false;
    return true;
}

function verifyUserCredentials($username, $password, $dataSource) {
    if (!$dataSource["user"]["username"] !== $username) return false;
    if (!$dataSource["user"]["password"] !== $password) return false;
    return true;
}

if (isset($_GET["username"]) && isset($_GET["password"])) {
    $username = $_GET["username"];
    $password = $_GET["password"];
    if (doesUserExist($username, $userCredentials)) {
        if (verifyUserCredentials($username, $password, $userCredentials))
            echo "<p>Bienvenido " . $username . ".</p>";
        else echo "<p>La contraseña no es válida</p>";
    } else echo "<p>El usuario no existe.</p>";
}
?>
</html>
