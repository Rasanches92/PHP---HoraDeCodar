<?php

$carros = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto_solar' => true,
    'cambio' => 'Manual',
    'portas' => 4
];

$chaves = array_keys($carros);

print_r($chaves);
echo "<br>";

$valores = array_values($carros);

print_r($valores);
echo "<br>";


?>

