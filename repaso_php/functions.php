<?php

$string    = "Hello, there was the old troll here, where is he?";
$collation = 100;

$toChar = function() use($collation,$string){
    return $string." <br>".$collation += 42;
};

echo $toChar();