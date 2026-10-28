<?php
namespace CursoPhp\Entities;

class Persona{

    private ?string $nombre;
    private ?string $edad;
    private ?string $email;

    public function __construct(string $nombre, ?string $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
}

