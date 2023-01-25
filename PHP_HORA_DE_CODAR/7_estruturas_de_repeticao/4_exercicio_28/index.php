<?php

$contador = 4;
$limite = 30;


while($contador < $limite){
    echo "O contador é $contador <br>";

    if($contador === 24){
        echo "O contador vai interromper no 24";
        break;
    }

    $contador+=2;
}

?>