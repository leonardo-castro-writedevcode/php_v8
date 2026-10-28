<?php
namespace CursoPhp\Entities;

use CursoPhp\Entities\Persona;

class Calculadora{
    public function sumar(int $a, int $b){
        return $a + $b;
    }

    public function getPersona(Persona $persona){
        echo $persona->getNombre();
    }
}