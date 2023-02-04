<?php

$pedro = [
    'nome' => 'Pedro',
    'idade' => 29,
    'profissao' => 'Programador'
];

$alexia = [
    'nome' => 'Alexia',
    'idade' => 23,
    'profissao' => 'Eng. Civil'
];

foreach($pedro as $carac => $value){
    echo "$carac => $value <br>";
}

foreach($alexia as $carac => $value){
    echo "$carac => $value <br>";
}



?>
