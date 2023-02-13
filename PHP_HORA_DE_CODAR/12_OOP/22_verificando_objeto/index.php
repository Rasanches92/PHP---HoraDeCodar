<?php

    class Humano {
        public function falar(){
            echo "Olá";
        }
    }

    $matheus = new Humano;

    $teste = 10;

    if(is_object($matheus)){
        echo "É um obejto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)){
        echo "É um obejto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($matheus) . "<br>";
    
    if(method_exists($matheus , "falar")){
        echo "Metodo existe <br>";
    } else {
        echo "metodo não existe <br>";
    }

    if(method_exists($matheus , "asd")){
        echo "Metodo existe <br>";
    } else {
        echo "metodo não existe <br>";
    }


?>