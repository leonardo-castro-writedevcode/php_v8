<?php

require_once '../vendor/autoload.php';
use CursoPhp\CustomsHelper\HelperUser;


/**
 * 
 * Dos formas de incrementar una variable.
 * 
 */

//$x se incremente en 1 utilizando el operador de suma (+).
$x = NULL;
$x = $x + 1;
echo $x;
HelperUser::newLine();

//o bien utilizando un operador de asignacion combinada.

$x += 1;
echo $x;
