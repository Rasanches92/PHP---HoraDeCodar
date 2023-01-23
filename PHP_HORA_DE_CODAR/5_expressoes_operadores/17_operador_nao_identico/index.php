<?php

$a = 1;
$b = "1";

if($a != $b){
    echo "A é diferente de B <br>";
}

if($a !== $b){
    echo "A é diferente de B 2 <br>";
}

if(1 !== 2){
    echo "Não é identico ao 3 <br>";
}

if(1 !== "1"){
    echo "Não é identico ao 4 <br>";
}

if([] !== "1"){
    echo "Não é identico ao 5 <br>";
}

?>