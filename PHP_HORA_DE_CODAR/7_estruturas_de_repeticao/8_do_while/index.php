<?php

$j = 0;

$teste = "Frase x <br>";

do{
        echo "Testando do while $j <br>";

        if($j == 2){
            echo $teste;
        }

        $j++;
} while($j < 10);

//decremento

$i = 10;

do{
        echo "Testando o decrementeo $i <br>";

        $i--;
} while($i > 0);

?>