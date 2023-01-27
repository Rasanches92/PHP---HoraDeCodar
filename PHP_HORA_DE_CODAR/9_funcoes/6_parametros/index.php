<?php

function velocidadeMaxima($vel){
    if(is_int($vel)){
        echo "O carro atinge a velocidade máxima de $vel km/h <br>"; 
    } else{
        echo "Por favor passe um número inteiro <br>";
    }
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(100);

echo "teste confirmado <br>";

$velocidade = 325;

velocidadeMaxima($velocidade);

velocidadeMaxima("teste");

function descreverAnimal ($nome, $raca){
    echo "O $nome é da raça $raca <br>";
}

descreverAnimal("Bob", "Vira lata");
descreverAnimal("Brutus", "Pastor Alemão");

?>