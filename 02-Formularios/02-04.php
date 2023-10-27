<?php

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

$users = [
  "user1" => [
      "nombre" => "jorge",
      "apellido" => "egea",
      "password" => "egeajorge"
  ]
];

function doesUserExist($username, $dataSource) {
    if (key_exists($username, $dataSource)) return true;
    return false;
}

function validateUserCredentials($user, $password, $dataSource) {
    if (!doesUserExist($user, $dataSource)) return "El usuario no es válido";
    if ($dataSource[$user]["password"] !== $password) return "La contraseña no es válida";
    return "Bienvenido " . $dataSource[$user]["nombre"] . " " . $dataSource[$user]["apellido"];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 04</title>
    <style>
        form {
            width: min(20rem, 100%);
            display: grid;
            gap: 1rem;
        }

        form > * {
            display: grid;
            gap: 0.5rem;
        }
    </style>
</head>
<body>
<p>
    04. Crea una pantalla de login con dos campos:
    usuario y contraseña. El programa deberá
    validar los datos de acceso contra un diccionario
    de datos como el de la imagen. El programa
    deberá mostrar un mensaje de bienvenida con
    su nombre y apellidos en caso de que los datos
    sean correctos.
    También indicará si el usuario introducido no
    existe o si la contraseña introducida es
    incorrecta.
</p>
<p>
    <?php
    if ($username !== "") echo validateUserCredentials($username, $password, $users)
    ?>
</p>
<form method="post">
    <div>
        <label for="username">Usuario</label>
        <input id="username" name="username">
    </div>
    <div>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password">
    </div>
    <button type="submit">Iniciar sessión</button>
</form>
</body>
</html>