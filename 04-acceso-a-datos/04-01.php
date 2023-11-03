<?php
function connect() {
    try {
        $con = new PDO("mysql:host=127.0.0.1;dbname=testing", "root", "");
        return $con;
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
}

if (isset($_POST["producto"]) && strlen($_POST["producto"]) > 0) {
    addProduct($_POST["producto"]);
}

if (isset($_GET["eliminar"])) {
    removeProduct($_GET["eliminar"]);
}

if (isset($_POST["vaciar"])) {
    removeAll();
}

function removeAll() {
    $con = connect();
    $stm = $con->prepare("DELETE FROM compras");
    $stm->execute();
}

function addProduct($productName) {
    $con = connect();
    if (!isset($productName) && count($productName) < 0) return;
    $stm = $con->prepare("INSERT INTO compras(nombre) VALUES(:nombre)");
    $stm->execute(["nombre" => $productName]);
}

function removeProduct($id) {
    $con = connect();
    if (!isset($id)) return;
    $stm = $con->prepare("DELETE FROM compras WHERE id = :id");
    $stm->execute(["id" => $id]);
}

function getProducts() {
    $data = [];
    $con = connect();
    $stm = $con->prepare("SELECT id, nombre FROM compras");
    $stm->execute();
    while ($row = $stm->fetch()) {
        $data[] = $row;
    }
    return $data;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 1</title>
</head>
<body>
<h1>Lista de compras</h1>
<?php
if (count(getProducts()) > 0) {
    echo "<ul>";
    foreach (getProducts() as $row) {
        echo "<li>$row[nombre] (<a href='04-01.php?eliminar=$row[id]'>Eliminar</a>)</li>";
    }
    echo "</ul>";
}
?>
<form method="post">
    <label>Añadir producto: <input name="producto"></label>
    <button type="submit">Añadir</button>
</form>
<form method="post">
    <input type="hidden" name="vaciar">
    <button type="submit">Vaciar lista</button>
</form>
</body>
</html>
