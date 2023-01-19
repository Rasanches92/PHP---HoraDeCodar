<?php

$carro = [
    'Marca' => 'Chevrolet', 
    'Modelo' => 'Onix', 
    'Cor' => 'Preta', 
    'km' => '22.000', 
    'Ano' => 2022,
    'Blindado' => false
];

print_r($carro);
echo "<br>";
echo $carro['Modelo'];
echo "<br>";
echo $carro ['km'];
echo "<br>";
echo $carro ['Ano'];

$marca = $carro['Marca'];
$cor = $carro['Cor'];

echo "<br>";

echo "O carro é da marca $marca e tem a cor $cor";


?>