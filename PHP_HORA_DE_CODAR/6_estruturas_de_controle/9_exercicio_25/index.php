<?php

$idadeJoao = 60;
$idadePedro = 20;

$nomeUm = "João";
$nomeDois = "Pedro";

if(is_int($idadeJoao)){
    $novaVariavel = $idadeJoao * 2;

    if($novaVariavel > 100){
        echo "A nova variavel foi $novaVariavel e é MAIOR que 100";
    } else {
        echo "A nova foi variavel foi $novaVariavel e é MENOR que 100";
    }
} else {
    echo "O parâmetro não é um inteiro.";
}


?>