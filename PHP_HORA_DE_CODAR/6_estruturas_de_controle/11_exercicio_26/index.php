<?php

$velocidadeCarro = 50;
$velMax = 40;

if($velocidadeCarro < $velMax){
    echo "O motorista está na velocidade correta";
} else if($velocidadeCarro == $velMax){
    echo "O motorista deve tomar cuidado";
} else {
    echo "O motorista foi multado;";
}