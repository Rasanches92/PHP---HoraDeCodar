<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângular',
    'material' => 'aço'
];

extract($arr);

 echo "$cor <br>";
 echo "$forma <br>";
 echo "$material <br>";

 $nome = "Pedro";

 $pessoa = [
    'nome' => 'João',
    'idade' => 29,
 ];

 echo "$nome <br>";

 extract($pessoa);

 echo "$nome <br>";
 