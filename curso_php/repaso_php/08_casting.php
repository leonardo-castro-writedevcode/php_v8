<?php

require_once '../vendor/autoload.php';
use CursoPhp\CustomsHelper\HelperUser;

HelperUser::newLine();
$undecided = 3.14;

$holder = (float) $undecided;
echo "is ".$holder." a double? ".is_double($holder);
HelperUser::newLine();

$holder = (string) $undecided;
echo "is ".$holder." a string? ".is_string($holder);
HelperUser::newLine();

$holder = (int) $undecided;
echo "is ".$holder." a integer? ".is_integer($holder);
HelperUser::newLine();

$holder = (float) $undecided;
echo "is ".$holder." a double? ".is_double($holder);
HelperUser::newLine();

$holder = (bool) $undecided;
echo "is ".$holder." a boolean? ".is_bool($holder);
HelperUser::newLine();

HelperUser::newLine();
echo "original variable type of $undecided: ";
echo gettype($holder);//double

HelperUser::newLine();
HelperUser::newLine();
echo "La suma entre";
HelperUser::newLine();
$suma = "70" - "110";
echo "es: ".$suma." y su tipo de dato es :".gettype($suma);
HelperUser::newLine();
HelperUser::newLine();
/*Php solo convertira los primeros numeros del string*/
$test = "30cm23";

$new_test = (int) $test;
/** Devuelve un boolean si es que pudo o no convertir la variable a su tipo de dato definido. */
//$new_test = settype($test,'int');
//echo "la variable test es un tipo de dato :".gettype($test)." y su valor es:".$test;
echo "Your imagenary box has a width of $new_test centimeters.";