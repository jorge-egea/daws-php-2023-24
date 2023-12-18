<?php

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

$ano = 2000;
$titulo = "Musashi";
$texto = "Musashi, es uno de los samurais con más renombre de la historia japonesa.";

$p1 = new Publicacion(2002, $titulo, $texto);

echo $p1->leer();

echo "\n";
echo "\n";

$p1->escribir("Se dice que nunca ha perdido un duelo.");

echo $p1->leer();
