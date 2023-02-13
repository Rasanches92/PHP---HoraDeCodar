<?php

    class Cachorro{
        public $raca;
        public $cor;
        public $nome;

        function __construct($raca,$cor,$nome){
            $this->raca = $raca;
            $this->cor = $cor;
            $this->nome = $nome;
        }

        public function exibirAnimal(){
            echo "O cachorro chamado $this->nome é da raça $this->raca e da cor $this->cor";

        }
    }

    $bob = new Cachorro("Pastor Alemão","preto","Bob");

    $bob->exibirAnimal();

    echo "<br>";
    
    $odin = new Cachorro("ShitZu","branco","odin");

    $odin->exibirAnimal();

    


?>