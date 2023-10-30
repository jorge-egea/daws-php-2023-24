<?php
session_start();

$credenciales = ["user1" => "12345"];
$username = NULL;
$password = NULL;
$mensaje = NULL;

if (isset($_GET["logout"])) {
    unset($_SESSION["usuario"]);
}

if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    $username = $_POST["usuario"];
    $password = $_POST["password"];
}

function verificarCredenciales($username, $password, $dataSource) :bool {
    if (!array_key_exists($username, $dataSource)) return false;
    if ($dataSource[$username] !== $password) return false;
    return true;
}

function iniciarSession($username): void {
    $_SESSION["usuario"] = $username;
}

if (isset($_SESSION["usuario"])) {
    include_once "03-05-welcome.view.php";
} else {
    if (isset($username) && isset($password)) {
        if (verificarCredenciales($username, $password, $credenciales)) {
             iniciarSession($username);
             include_once "03-05-welcome.view.php";
        } else {
            if (isset($_SESSION["numIntentos"])) {
                $_SESSION["numIntentos"] = $_SESSION["numIntentos"] + 1;
            }
            else {
                $_SESSION["numIntentos"] = 1;
            }
            if ($_SESSION["numIntentos"] > 3)
                $mensaje = "Has superado el número de intentos";
            else $mensaje = "Los credenciales no son válidos";
            include_once  "03-05-form.view.php";
        }

    } else include_once  "03-05-form.view.php";
}