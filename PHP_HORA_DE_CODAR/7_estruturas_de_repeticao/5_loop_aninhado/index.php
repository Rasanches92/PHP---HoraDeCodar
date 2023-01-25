<?php

$i = 1;

$c = "variável teste";

while($i <= 10){
    echo "O loop externo " . $i . "<br>";

    //Começo do loop interno
    $j = 1;
    echo "$c <br>";
    while($j <= 5){
        echo "Loop interno $j <br>";
        echo "$c 2 <br>";
        $j++;
    }
    //Fim do loop interno

    $i++;
}

?>