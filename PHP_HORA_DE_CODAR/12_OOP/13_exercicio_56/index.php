<?php

    class Humano{
        public $pernas = "Duas Pernas";
        public $boca = "Uma boca";

        public function falar(){
            echo "Olá eu sou um humano <br>";
        }
    }

    class Professor extends Humano {
        public $disciplina = "Matemática";

        public function estaLesionando(){
            echo "O professor está lesionando a matéria de $this->disciplina <br>";
        }
    }

    $pedro = new Humano;

    echo "$pedro->pernas <br>";
    echo "$pedro->boca <br>";
    $pedro->falar();

    $alfredo = new Professor;

    echo "$alfredo->pernas <br>";
    echo "$alfredo->boca <br>";

    $alfredo->estaLesionando();

    


?>