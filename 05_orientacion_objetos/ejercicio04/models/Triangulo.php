<?php

namespace models;

use models\Poligono;

class Triangulo extends Poligono {
    function area(): int {
        return $this->getAltura() * $this->getAnchura() / 2;
    }
}