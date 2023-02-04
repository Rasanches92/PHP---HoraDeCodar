<?php

$arr = [
    'Matheus' => 28,
    'Cris' => 27,
    'Nina' => 32,
    'Oswaldo' => 88,
];

//ordenando pelas idades
asort($arr); 
print_r($arr);
echo "<br>";

$arr2 = [
    'Matheus' => 41,
    'Cris' => 20,
    'Nina' => 17,
    'Oswaldo' => 96,
];

arsort($arr2); 
print_r($arr2);
echo "<br>";

//ordenação pelos valores das chaves
ksort($arr2); 
print_r($arr2);
echo "<br>";

krsort($arr2); 
print_r($arr2);
echo "<br>";




?>
