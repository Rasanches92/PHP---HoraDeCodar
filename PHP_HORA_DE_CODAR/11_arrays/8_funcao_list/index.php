<?php

$pessoa = ["Pedro",32,"Programador","verde"];

print_r($pessoa);
echo "<br>";

list($nome,$idade,$profissao,$cor_dos_olhos) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$cor_dos_olhos <br>";

print_r($pessoa);

?>