<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "corporativo";
    $pass = "0608";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //ASSUNTO DA AULA
    $stmt = $conn->prepare("INSERT INTO itens (produto,descricao,quantidade) VALUES (:produto, :descricao, :quantidade)");

    $produto = "Notebook";
    $descricao = "Produto novo";
    $quantidade = 18;

    $stmt->bindParam(":produto",$produto);
    $stmt->bindParam(":descricao",$descricao);
    $stmt->bindParam(":quantidade",$quantidade);

    $stmt->execute();