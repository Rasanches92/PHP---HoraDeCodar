<?php

    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    $dataB->setDate(2022,10,10);
    $dataC->setDate(2023,02,15);



    echo ($dataB > $dataA) ? "dataB é maior que dataA" : (($dataA > $dataC) ? "dataA é maior que dataB e também é maior ue dataC" : "dataA é maior que dataB, porém menor que dataC");

    

?>