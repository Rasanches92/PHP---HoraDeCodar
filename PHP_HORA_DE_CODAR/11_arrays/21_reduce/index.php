<?php

$arr = [1,2,3,3,1,5,1];

function soma($a,$b){
    return $a + $b;
}

function subtracao($a,$b){
    return $a - $b;
}

$resultado = array_reduce($arr,'soma');

echo "$resultado <br>";

$resultado = array_reduce($arr,'subtracao');

echo "$resultado <br>";

?>