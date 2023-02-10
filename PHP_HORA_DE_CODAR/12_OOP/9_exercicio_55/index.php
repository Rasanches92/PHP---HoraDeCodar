<?php

    class Carro {
        public $cor;
        public $tetoSolar;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade máxima desse carro é de $this->velocidadeMaxima <br>";
        }
    }

    $bmw = new Carro;

    $bmw->cor = "Branca";
    $bmw->tetoSolar = true;
    $bmw->setVelocidadeMaxima(300);

    $bmw->getVelocidadeMaxima();

    $ferrari = new Carro;
    
    $ferrari->cor = "Vermelha";
    $ferrari->tetoSolar = false;
    $ferrari->setVelocidadeMaxima(350);

    $ferrari->getVelocidadeMaxima();
?>