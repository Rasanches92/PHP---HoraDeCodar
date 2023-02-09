<?php

    class Car{
        public $rodas;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar(){
            echo "Vrummm <br>";
        }
    }

    $ferrari = new Car;
    
    echo $ferrari->aro . "<br>";

    $ferrari->rodas = 4;
    echo $ferrari->rodas . "<br>";

    $ferrari->cor = "Azul";
    echo $ferrari->cor . "<br>";

    $ferrari->ligar();

?>