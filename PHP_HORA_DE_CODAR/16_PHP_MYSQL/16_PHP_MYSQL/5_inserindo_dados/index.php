<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";


    $conn = new mysqli($host,$user,$pass,$db);

    // ASSUNTO DA AULA

    $table = "itens";
    $produto = "Placa de video";
    $descricao = "AMD RT660";
    $quantidade = 5;

    $q = "INSERT INTO $table (produto,descricao,quantidade) VALUES ('$produto','$descricao','$quantidade')";

    $conn->query($q);

    $conn->close();