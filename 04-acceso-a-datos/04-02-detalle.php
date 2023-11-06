<?php
require_once "04-02-database.php";


if (isset($_GET["id"])) {
    $connection = getConnection();
    $employee = getEmployee($connection, $_GET["id"]);
}

include_once "04-02-detalle.view.php";
