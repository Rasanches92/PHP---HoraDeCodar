<?php

$a = 10;
$b = 15;

function testeEscopo(){
    $a = 5;
    global $b;
    static $c = 0;

    $a++;
    $b++;
    $c++;

    echo "ESCOLA LOCAL DE A: $a. <br>";
    echo "ESCOLA GLOBAL DE B: $b. <br>";
    echo "ESCOLA STATIC DE C: $c. <br>";
}

echo "ESCOPO GLOBAL DE A : $a. <br>";
echo "ESCOPO GLOBAL DE B : $b. <br>";

testeEscopo();
testeEscopo();
testeEscopo();

