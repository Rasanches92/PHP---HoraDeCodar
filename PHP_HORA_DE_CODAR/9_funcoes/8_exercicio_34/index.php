<?php

function parImpar($inteiro){
    if($inteiro % 2 == 0 ){
        echo "O número é par <br>";
    } else {
        echo "O número é impar <br>";
    }
}

echo "Teste par <br>";
parImpar(2);
parImpar(00);
parImpar(44);

echo "Teste impar <br>";
parImpar(57);
parImpar(1);
parImpar(3);
