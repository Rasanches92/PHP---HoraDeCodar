<?php

$array_multi = [
    [1,2,3,4],
    [9,8,7,6],
    [1,3,6,7]
];

//Loop no array externo
for($i = 0;$i < count($array_multi);$i++){

    //Imprimindo Array
    echo "Imprimindo Array externo: " . ($i + 1) . "<br>";

    //imprimindo o array interno
    for($j = 0; $j < count($array_multi[$i]) ; $j++){

        echo $array_multi[$i][$j] . "<br>";

    }
}

?>