<?php

namespace models;

use models\Poligono;

class Cuadrado extends Poligono {

    function area(): int {
        return $this->getAltura() * $this->getAnchura();
    }

}