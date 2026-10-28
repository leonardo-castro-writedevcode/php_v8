<?php

require_once '../vendor/autoload.php';

use CursoPhp\CustomsHelper\HelperUser;

/**
 * Php tambien suministra la funcion settype(), la cual es usada para cambiar
 * el tipo de una variable. Para usar settype(), ubicas la variable a cambiar y el tipo
 * a cambiar entre los parentesis y separados los elementos con una coma, como lo siguiente:
 * 
 * settype($variabletochange,'new type');
 * 
 */

/**
 * Convierte el valor flotante 3.14 a cada uno de los cuatro tipos de datos examinados
 * en este capitulo.
 */


HelperUser::newLine();
$undecided = 3.14;
echo "is ".$undecided." a double? ".HelperUser::evaluarBoleano(is_double($undecided));
settype($undecided,'string');

HelperUser::newLine();
echo "is ".$undecided." a string? ".HelperUser::evaluarBoleano(is_string($undecided));
settype($undecided,'integer');

HelperUser::newLine();
echo "is ".$undecided." a integer? ".HelperUser::evaluarBoleano(is_integer($undecided));
settype($undecided,'double');

HelperUser::newLine();
echo "is ".$undecided." a double? ".HelperUser::evaluarBoleano(is_double($undecided));
settype($undecided,'bool');

HelperUser::newLine();
echo "is ".$undecided." a bool? ".HelperUser::evaluarBoleano(is_bool($undecided));


