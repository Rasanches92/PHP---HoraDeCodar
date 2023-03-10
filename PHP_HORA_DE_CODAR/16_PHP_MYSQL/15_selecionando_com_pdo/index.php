<?php

$host = "localhost";
$db = "cursophp";
$user = "corporativo";
$pass = "0608";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

//INICIO DA AULA

$id = 2;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id",$id);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);

