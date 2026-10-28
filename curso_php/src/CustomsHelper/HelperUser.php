<?php
namespace CursoPhp\CustomsHelper;

class HelperUser{


    public static function newLine(){
        echo "<br/>";
    } 

    public static function evaluarBoleano(bool $bool) :string{
        $evaluacion = "";
        if($bool==true)
        {
            $evaluacion = ":Si.";
        }
        elseif($bool==false){
            $evaluacion = ":No.";
        }
        return $evaluacion;
    }
}