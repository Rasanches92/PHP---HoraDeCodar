<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "corporativo";
    $pass = "0608";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //INICIO DA AULA

    $id = 7;
    $descricao = "Intel i7 GTX 7090";

    $stmt = $conn->prepare("UPDATE itens SET descricao = :descricao WHERE id = :id");
    $stmt->bindParam(":descricao",$descricao);
    $stmt->bindParam(":id",$id);

    $stmt->execute();















