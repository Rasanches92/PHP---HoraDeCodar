<?php

function teste($a = "teste"){
    echo "O valor de A é: $a <br>";
}

teste();

teste("asd");

function testando($b, $a = "teste"){
    echo "O valor de A é: $a e o valor de B é: $b";
}

testando(1);