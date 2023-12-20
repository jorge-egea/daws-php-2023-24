<?php

namespace ejercicio05;
class PersonasEnElMundo {
    public static int $personasEnElMundo = 0;

    function __construct() {
        self::$personasEnElMundo++;
    }

    public static function getNumPer(): int {
        return self::$personasEnElMundo;
    }

}