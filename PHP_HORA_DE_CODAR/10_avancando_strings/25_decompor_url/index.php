<?php

$url = "https://www.google.com";

$array_url = parse_url($url);

print_r($array_url);
echo "<br>";

echo $array_url["host"];
echo "<br>";

$url2 = "http://www.horadecodar.com.br/usuarios/rafael?id=12&nome=Rafael";

$array_url2 = parse_url($url2);

print_r($array_url2);

?>