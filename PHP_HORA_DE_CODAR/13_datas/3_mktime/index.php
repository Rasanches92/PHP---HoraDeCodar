<?php

    $dataNascimento = mktime(2,22,33,8,5,1992);

    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/y',$dataNascimento);

    echo $dataNascimentoFormatada . "<br>";

    $dataEspecifica = mktime(10,20,11,4,28,2041);

    $dataFuturaFormatada = date('m/d/y',$dataEspecifica);

    echo $dataFuturaFormatada . "<br>";

?>