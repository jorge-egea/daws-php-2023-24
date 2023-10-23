<?php
function concatenar($valor1, $valor2 = "valor por defecto") {
    return "$valor1 $valor2";
}

$cadena1 = $_GET["cadena1"];
$cadena2 = $_GET["cadena2"];
$resultado = concatenar($cadena1, $cadena2);


require "01-11.view.php";


