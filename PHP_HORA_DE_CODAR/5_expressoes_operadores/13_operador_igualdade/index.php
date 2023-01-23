<?php

if(3 == 3){
    echo "Comparação verdadeira 1<br>";
}
if(3 == 4){
    echo "Comparação verdadeira 2<br>";
}

$a = 12;
$b = 12;
$c = 100;

if($a == $b){
   echo "Comparação verdadeira a1 <br>"; 
}

if($a == $c) {
    echo "Comparação verdadeira a2 <br>";
}

$nome = "Rafael";
$nomeDoSistema = "Rafael";

if ($nome == $nomeDoSistema) {
    echo "Nome coincide <br>";
}
if ($nome = $nomeDoSistema) {
    echo "Nome coincide <br>";
}


?>