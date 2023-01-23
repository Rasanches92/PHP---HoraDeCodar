<?php

$texto = "Olá Mundo";
$bool = true;
$inteiro = 100;

$msgTrue = "A variavel é um inteiro <br>" ;
$msgFalse = "A variavel não é um inteiro <br>";

if(is_int($bool)){
    echo $msgTrue;
} else {
    echo $msgFalse;
}

if(is_int($inteiro)){
    echo $msgTrue;
} else {
    echo $msgFalse;
}


?>