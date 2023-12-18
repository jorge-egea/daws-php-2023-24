<?php

namespace orientacionObjetos\ejercicio02\models;

class Publicacion {
    private int $ano;
    private string $titulo;
    private string $texto;

    public function __construct(int $ano, string $titulo, string $texto) {
        $this->ano = $ano;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function leer(): string {
        return $this->texto;
    }

    public function escribir($texto): void {
        $this->texto .= "\n" . $texto;
    }

}
