<?php

$str = "Estamos tenstando o metodo strpos, com o strpos podemos encontrar stings";

$testeEncontrar = strpos($str,"strpos");

echo $testeEncontrar . "<br>";

$testeEncontrar = strpos($str,"java");

echo $testeEncontrar . "<br>";

if($testeEncontrar == false){
    echo "Palavra não encontrada <br>";
}

$palavra = "com";

$testeEncontrar3 = strpos($str,$palavra);

echo $testeEncontrar3 . "<br>";

$palavra2 = "to";

$testeEncontrar2 = strpos($str,$palavra2);

echo $testeEncontrar2 . "<br>";

?>