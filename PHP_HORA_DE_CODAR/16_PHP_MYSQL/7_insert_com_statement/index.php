<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";


    $conn = new mysqli($host,$user,$pass,$db);

    // ASSUNTO DA AULA
    $produto = "Memória Ram";
    $descricao = "Memória nova";
    $quantidade = 4;

    $stmt = $conn->prepare("INSERT INTO itens (produto,descricao,quantidade) VALUES (?,?,?)");

    $stmt->bind_param("ssi",$produto,$descricao,$quantidade); //s = string, i = integer, d = double

    $stmt->execute();