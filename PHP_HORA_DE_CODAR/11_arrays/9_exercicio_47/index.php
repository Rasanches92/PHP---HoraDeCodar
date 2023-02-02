<?php

$carro = ["Jaguar",3.0,"azul",2018,"teto-solar","automatico"];

print_r($carro);
echo "<br>";

list($marca,$motor,$cor_do_carro,$ano,$acessorio,$cambio) = $carro;

echo "$marca <br>";
echo "$motor <br>";
echo "$cor_do_carro <br>";
echo "$ano <br>";
echo "$acessorio <br>";
echo "$cambio <br>";


?>