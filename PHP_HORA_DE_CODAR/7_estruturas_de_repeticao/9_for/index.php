<?php

// //for(contador;condição;incremento){
//     código
// }

$nome = "Rafael";

for($i = 0;$i <= 10;$i++){
    if($i == 4){
        echo "$nome <br>";
    }

    if($i == 8){
        break;
    }
    echo "Testando o for $i <br>";
}


?>
