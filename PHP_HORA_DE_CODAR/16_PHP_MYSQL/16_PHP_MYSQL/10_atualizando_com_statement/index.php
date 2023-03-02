<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";


    $conn = new mysqli($host,$user,$pass,$db);

    // ASSUNTO DA AULA
    $id = 4;

    $stmt = $conn->prepare("UPDATE itens SET produto = ? WHERE id = ?");

    $produto = "Notebook"; 

    $stmt->bind_param("si",$produto,$id);

    $stmt->execute();

    if($stmt->error){
        echo "Erro: " . $stmt->error;
    }
