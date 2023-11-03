<?php
function connect() {
    try {
        $con = new PDO("mysql:host=127.0.0.1;dbname=testing", "root", "");
        return $con;
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
}

$stm0 = connect()->prepare("INSERT INTO ALUMNO(nombre, email) VALUES('desde phpStorm', 'desdephpstorm@email.com')");
$stm0->execute();

$stm0 = connect()->prepare("INSERT INTO ALUMNO(nombre, email) VALUES(:value1, :value2)");
$stm0->execute(["value1" => "hola", "value2" => "hola@email.com"]);

$stm = connect()->prepare("SELECT nombre, email FROM alumno");
$stm->execute();

while($row = $stm->fetch()) {
    echo $row["nombre"] . " ";
    echo $row["email"] . "\n";
}
