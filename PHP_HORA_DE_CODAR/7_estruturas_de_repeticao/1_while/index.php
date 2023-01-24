<?php

//Definição do contador
$x = 0;

// Início da estrutura de repetição
while($x < 10){
    //corpo do loop
    echo $x . "<br>";

    //Incremento do contador
    $x++;
}

//Irá sair do Loop e continuar o código
echo "Continuando código <br>";

$y = 0;

while($y <= 10){

    echo $y . "<br>";

    $y+=2;
}

echo "Continuando código <br>";

$z = 10;

while($z > 0){

    echo $z . "<br>";

    $z--;
}

echo "Continuando código <br>";

$a = 10;

while($a > 0){

    if($a % 2 !=0){
        echo $a . "<br>";
    }

    $a--;
}

echo "Continuando código <br>";