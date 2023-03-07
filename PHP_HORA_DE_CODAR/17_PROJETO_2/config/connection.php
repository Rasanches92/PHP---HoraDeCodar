<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "corporativo";
    $pass = "0608";

    try{

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        //Ativar o modo de erros

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e){
        //erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }

?>