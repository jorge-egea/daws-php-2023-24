<?php
require_once "04-02-database.php";
$connection = getConnection();

if (isset($_GET["id"])) {
    deleteEmployee($connection, $_GET["id"]);
}else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $rawData = file_get_contents("php://input");
    parse_str($rawData, $parsedData);
    $usernames = isset($parsedData['id']) ? (array)$parsedData['id'] : array();
    foreach ($usernames as $id) {
        deleteEmployee($connection, $id);
    }
}

if (isset($_POST["q"])) {
    $employees = getAllEmployeesWhereLike($connection, $_POST["q"]);
} else $employees = getAllEmployees($connection);

include_once "04-02-index.view.php";