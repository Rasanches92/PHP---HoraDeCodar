<?php

    class Humano{

    }

    class Animal{

    }
    
    class Professor extends Humano{

    }

    $marcos = new Humano;

    $truca = new Animal;

    if($marcos instanceof Humano){
        echo "Marcos é um humanos <br>";
    } else {
        echo "Marcos não é um humano <br>";
    }

    if($truca instanceof Humano){
        echo "Marcos é um humanos <br>";
    } else {
        echo "A truca não é um animal <br>";
    }

    $pedro = new Professor;

    if($pedro instanceof Humano){
        echo "Pedro é um professor <br>";
    } else {
        echo "Pedro não é professor";
    }

    if($truca instanceof Professor){
        echo "Truca é um professor <br>";
    } else {
        echo "Truca não é professor";
    }