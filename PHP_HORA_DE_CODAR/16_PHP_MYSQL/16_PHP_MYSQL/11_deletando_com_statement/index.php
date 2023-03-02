<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";


    $conn = new mysqli($host,$user,$pass,$db);

    // ASSUNTO DA AULA
    $produto = "Notebook";

    $stmt = $conn->prepare("DELETE FROM itens WHERE produto = ?");

    $stmt->bind_param("s",$produto);

    $stmt->execute();

    $conn->close();