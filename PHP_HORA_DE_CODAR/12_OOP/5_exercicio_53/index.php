<?php

    class Cachorro{
        function latir(){
            echo "au au <br>";
        }

        function andar($m){
            echo "o cachorro andou $m metros <br>";
        }
    }

    $bob = new Cachorro;
    $thor = new Cachorro;

    $bob->latir();
    $thor->latir();

    $bob->andar(100);
    $thor->andar(50);
    

?>