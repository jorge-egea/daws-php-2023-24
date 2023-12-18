<?php

include_once "models/Publicacion.php";

use orientacionObjetos\ejercicio02\models\Publicacion;

$ano = 2000;
$titulo = "Musashi";
$texto = "Musashi es considerado uno de los mejoraes samurais de la historia";

$p1 = new Publicacion($ano, $titulo, $texto);

echo $p1->leer();