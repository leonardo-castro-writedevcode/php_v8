<?php

require_once __DIR__ . '/vendor/autoload.php';

use CursoPhp\Entities\User;

$user = new User();

echo $user->getName();
echo __DIR__;

