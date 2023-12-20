<?php

include_once "PersonasEnElMundo.php";

use ejercicio05\PersonasEnElMundo;


for ($i = 0; $i < 5; $i++) {
    new PersonasEnElMundo();
}

echo "Número de personas en el mundo " . PersonasEnElMundo::$personasEnElMundo;
