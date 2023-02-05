<?php

$arr1 = [1,2,3];
$arr2 = [10,40,90];
$arr3 = [2.1,3.4,2.7];
$arr4 = ["Pedro",true];

$arrMerge = array_merge($arr1,$arr2,$arr3,$arr4);

print_r($arrMerge);
echo "<br>";
?>