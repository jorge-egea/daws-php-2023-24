<?php

require_once "04-02-database.php";

if (isset($_POST["dni"]))
    $dni = $_POST["dni"];
if (isset($_POST["nombre"]))
    $nombre = $_POST["nombre"];
if (isset($_POST["apellidos"]))
    $apellidos = $_POST["apellidos"];
if (isset($_POST["fecha"]))
    $fecha = $_POST["fecha"];
if (isset($_POST["email"]))
    $email = $_POST["email"];
if (isset($_POST["genero"]))
    $genero = $_POST["genero"];
if (isset($_POST["curriculum"]))
    $curriculum = $_POST["curriculum"];

addEmployee(getConnection(), $dni, $nombre, $apellidos, $fecha, $email, $genero, $curriculum);

include "04-02-anadirEmpleado.view.php";