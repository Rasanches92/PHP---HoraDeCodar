<?php

$a = 5;
$b = 2;

if($a >= $b){
    echo "If 1: Resultado = true <br>";
} else{
    echo "If 1: Resultado = false <br>";
}

$nome1 = "Matheus";
$nome2 = "Pedro";

if($nome1 !== $nome2){
    echo "If 2: Resultado = true <br>";
} else{
    echo "If 2: Resultado = false <br>";
}

$c = 12;
$d = 11;

$resultadoTrue = "If 3: Resultado = True <br>";
$resultadoFalse = "If 3: Resultado = False <br>";

if($c <= $d){
    echo $resultadoTrue;
} else {
    echo $resultadoFalse;
}

?>