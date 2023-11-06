<?php

$host = "127.0.0.1";
$dbname = "testing";
$user = "root";
$password = "";

function getConnection() :PDO {
    global $host, $dbname, $user, $password;
    return new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}

function addEmployee($connection, $dni, $nombre, $apellidos, $fecha, $email, $genero, $curriculum) :void {
    $statement = $connection->prepare("INSERT INTO empleados(dni, nombre, apellidos, fecha, email, genero, curriculum) "
        . "VALUES (:dni, :nombre, :apellidos, :fecha, :email, :genero, :curriculum)");

    $statement->execute(["dni" => $dni, "nombre" => $nombre, "apellidos" => $apellidos, "fecha" => $fecha,
        "email" => $email, "genero" => $genero, "curriculum" => $curriculum]);
}

function deleteEmployee($connection, $id) :void {
    $statement = $connection->prepare("DELETE FROM empleados WHERE id = :id");
    $statement->execute(["id" => $id]);
}

function getAllEmployees($connection) :array {
    $statement = $connection->prepare("SELECT id, dni, nombre, apellidos, fecha, email, genero, curriculum FROM empleados");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getEmployee($connection, $id) :array {
    $statement = $connection->prepare("SELECT id, dni, nombre, apellidos, fecha, email, genero, curriculum FROM empleados WHERE id = :id");
    $statement->execute(["id" => $id]);
    $data = [];
    if($row = $statement->fetch()) {
        $data = [
            "id" => $row["id"],
            "dni" => $row["dni"],
            "nombre" => $row["nombre"],
            "apellidos" => $row["apellidos"],
            "fecha" => $row["fecha"],
            "email" => $row["email"],
            "genero" => $row["genero"],
            "curriculum" => $row["curriculum"]
        ];
    }
    return $data;
}