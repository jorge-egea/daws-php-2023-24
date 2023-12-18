<?php

namespace models;

abstract class Poligono {

    private string $color;
    private int $altura;
    private int $anchura;

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getAltura(): int {
        return $this->altura;
    }

    public function setAltura(int $altura): void {
        $this->altura = $altura;
    }

    public function getAnchura(): int {
        return $this->anchura;
    }

    public function setAnchura(int $anchura): void {
        $this->anchura = $anchura;
    }

    abstract public function area(): int;

}