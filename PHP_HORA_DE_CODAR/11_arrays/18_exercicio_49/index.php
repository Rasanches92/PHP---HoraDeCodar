<?php

$memoria = "8 gb";
$hd = "1 tb";
$gabinete = "gamer";
$fonte = "600w";
$novo = true;

$computador = compact('memoria','hd','gabinete','fonte','novo');

print_r($computador);
echo "<br>";

foreach ($computador as $acessorios => $values){
    echo "$acessorios : $values <br>";
}


?>
