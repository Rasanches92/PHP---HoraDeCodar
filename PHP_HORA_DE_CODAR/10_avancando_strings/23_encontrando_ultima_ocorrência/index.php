<?php

$str = "Testando encontro da palavra teste em uma string que tem teste";

$palavra = strrpos($str,"teste");

echo $palavra . "<br>";

$palavra = strpos($str,"teste");

echo $palavra . "<br>";

if(strrpos($str,"Java") == false){
    echo "A palavra Java não foi encontrada <br>";
}

$p = substr($str, strpos($str,"teste"),5);

echo $p . "<br>";

?>