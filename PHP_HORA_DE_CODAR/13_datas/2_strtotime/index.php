<?php

    $cincoDias = strtotime("5 days");

    echo $cincoDias . "<br>";

    $dezDias = strtotime("10 days");

    echo $dezDias . "<br>";

    $dataAtualMais5 = date('d/m/y', $cincoDias);

    echo $dataAtualMais5 . "<br>";

    $dataAtualMais10 = date('d/m/y', $dezDias);

    echo $dataAtualMais10 . "<br>";

    $doisMeses = strtotime("2 months");

    echo $doisMeses . "<br>";

    $dataAtualaMais2Meses = date('d/m/y', $doisMeses);

    echo $dataAtualaMais2Meses . "<br>";

    $dozeAnos = strtotime("12 years");

    $dataAtualaMais12Anos = date('d/m/y', $dozeAnos);

    echo $dataAtualaMais12Anos . "<br>";


?>