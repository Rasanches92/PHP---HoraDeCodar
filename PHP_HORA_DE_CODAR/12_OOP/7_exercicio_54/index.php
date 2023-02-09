<?php

    class Pessoa{
        public $nome;
        public $idade;

        function andar($m){
            echo "A pessoa andou $m metros <br>";
        }
    }

    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa1->nome = "Pedro";
    $pessoa1->idade = 28;

    echo "O nome dele é $pessoa1->nome e ele tem $pessoa1->idade anos. <br>";
  

    $pessoa1->andar(150);

    
    $pessoa2->nome = "Jorge";
    $pessoa2->idade = 39;
    

    echo "O nome da pessoa 2 é $pessoa2->nome e ele tem $pessoa2->idade anos.<br>";

?>