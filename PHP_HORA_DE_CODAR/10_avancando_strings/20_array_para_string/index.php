<?php

$arr = ["Maçã" , "Pera" , "Mamão", "Batata"];

$str = implode(", ",$arr);

echo $str . "<br>";

$arr2 = ["Avião","Jipe","Tanque","Metralhadora"];

$str2 = implode(" <-> ", $arr2);

echo $str2 . "<br>";


?>