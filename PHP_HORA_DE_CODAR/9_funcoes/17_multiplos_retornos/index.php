<?php

function alteraDados($nome,$idade){
    $nome = "Sr. $nome";
    $idado = "$idade anos";

    return [$nome,$idade];
}

$dados = alteraDados("Rafael",29);

print_r($dados;

echo "<br>";

echo "Olá $dados[0] , você tem $dados[1]";