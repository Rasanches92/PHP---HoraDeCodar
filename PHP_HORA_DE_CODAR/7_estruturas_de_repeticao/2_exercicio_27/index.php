<?php

$arr = [5, "Teto Solar" , "Trava eletrica", 2018, 45000, true, "ar condicionado", "4 portas", "preta", "unico dono"];

$x = count($arr);
$y = 0;

while($y < $x){
    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }

    $y++;
}

?>