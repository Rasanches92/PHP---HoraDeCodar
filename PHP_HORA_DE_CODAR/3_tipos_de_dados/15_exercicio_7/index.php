<?php

$pessoa = [
    'nome' => 'João',
    'idade' => 18
];

$nome = $pessoa['nome'];

if($pessoa['idade'] >= 18){
    echo "$nome é maior de idade!";
} else {
    echo "$nome é menor de idade!";
}


?>