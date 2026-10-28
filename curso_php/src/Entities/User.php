<?php

namespace CursoPhp\Entities;
//User class
class User 
{
    private string $name = "Leonardo Miguel Castro Vidal";

    public function __construct() {
        
    }

    public function setName(){

    }

    public function getName(){
        return $this->name;
    }
}



?>