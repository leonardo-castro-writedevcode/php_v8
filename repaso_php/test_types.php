<?php

$new_line = function(){
    echo "<br/>";
};

$evaluar_expresion = function($bool){
    if($bool==true)
    {
        return ":Si.";
    }
    elseif($bool==false){
        return ":No.";
    }
};

$nombre_archivo = 'libro.txt';
$directorio_padre = $_SERVER['DOCUMENT_ROOT'];
$full_path_file = $directorio_padre."/".$nombre_archivo;

/**La funcion file devuelve un array con las lineas de texto como elementos. */
$resource = file($_SERVER['DOCUMENT_ROOT'].'../libro.txt');
echo gettype($resource);
$new_line();
print_r($resource);
//echo "El archivo ".basename($resource)." contiene ".count($resource)." linea(s) de texto";
$new_line();

echo "El archivo de texto is a resource? ".$evaluar_expresion(is_resource($resource));// check if is a resource
$new_line();

$testing = NULL; //declare without assigning
echo "is null ".$evaluar_expresion(is_null($testing)); //check if null
$new_line();

$testing = 5;
echo "is an integer? ".$evaluar_expresion(is_int($testing));//checks if integer
$new_line();

$testing = "five";
echo "is a string? ".$evaluar_expresion(is_string($testing));//check if string
$new_line();

$testing = 5.024;
echo "is a double? ".$evaluar_expresion(is_double($testing));//check if double
$new_line();

$testing = true;
echo "is boolean? ".$evaluar_expresion(is_bool($testing));//check if boolean
$new_line();

$testing = array('apple','orange','pear');
echo "is an array? ".$evaluar_expresion(is_array($testing));//check if array
$new_line();

echo "is numeric? ".$evaluar_expresion(is_numeric($testing));//check if numeric
$new_line();

echo "is a resource? ".$evaluar_expresion(is_resource($testing));// check if is a resource
$new_line();

echo "is a resource? ".$evaluar_expresion(is_resource($testing));// check if is a resource
$new_line();

echo "is an array? ".$evaluar_expresion(is_array($testing));//check if is an array
$new_line();

//pagina 80.
$new_line();
echo "DOCUMENT_ROOT: ".$_SERVER['DOCUMENT_ROOT'];
$new_line();
echo __DIR__;
