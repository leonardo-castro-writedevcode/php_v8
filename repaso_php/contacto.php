<?php

require_once __DIR__ . '/vendor/autoload.php';

use CursoPhp\Entities\User;
use CursoPhp\Entities\Calculadora;
use CursoPhp\Entities\Persona;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = new User();
        echo $user->getName();

        $leonardo = new Persona("Leonardo","leonardo@gmail.com");

        $calculadora = new Calculadora();
        $calculadora->getPersona($leonardo);
    ?>
</body>
</html>