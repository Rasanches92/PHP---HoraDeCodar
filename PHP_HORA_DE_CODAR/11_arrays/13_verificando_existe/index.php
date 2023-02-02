<?php

$arr = [
    'nome' => 'Pedro',
    'idade' => 32
];

if(array_key_exists('nome',$arr)){
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe! <br>";
}

if(array_key_exists('profissão',$arr)){
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe! <br>";
}

//ISSET

if(isset($arr['nome'])){
    echo "Agora com ISSET: A chave existe! <br>";
} else {
    echo "Agora com ISSET: A chave não existe! <br>";
}

if(isset($arr['profissao'])){
    echo "Agora com ISSET: A chave existe! <br>";
} else {
    echo "Agora com ISSET: A chave não existe! <br>";
}

?>