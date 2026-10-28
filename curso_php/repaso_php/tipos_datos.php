<?php
require_once '../vendor/autoload.php';

use CursoPhp\Entities\User;

function break_line(){
    echo "<br>";
}

/*Boleando , Bool o una de los valores especiales true o false.*/
$verdadero = true;
$falso     = false;

/**Entero, Integer o un numero entero*/
$numero_entero = 5;

/** Flotante, float o un numero punto-flotante*/
$flotante = 3.14;

/** String, cadena de texto o una colecion de caracteres.*/
$cadena = "Programacion en PHP.";

/** Objecto, Object o una instancia de una clase. */
$objeto = new User();

/**Arreglo , vector, array o un conjunto ordenado de indices y valores.*/
$arreglo_unidimensional = [1,2,3,4,5,6,7,8,9,0];

/**Recurso, resource o una referencia a un recurso de proveedores (una base de datos, por ejemplo.)*/

/**Nulo , NULL o una variable no inicializada. */
$null = NULL;
$variable_no_inicializada = NULL;


echo gettype($verdadero);
break_line();
echo gettype($falso);
break_line();
echo gettype($numero_entero);
break_line();
echo gettype($flotante);
break_line();
echo gettype($cadena);
break_line();
echo gettype($objeto);
break_line();
echo gettype($arreglo_unidimensional);
break_line();
echo gettype($null);
break_line();
echo gettype($variable_no_inicializada);
break_line();

if(is_bool($verdadero)){
    echo "La variable \$verdadero es una varaible boleana";
}
else
{
    echo "La variable \$verdadero no es una varaible boleana";
}
break_line();

echo "<a href='index.php'>Index</a>";