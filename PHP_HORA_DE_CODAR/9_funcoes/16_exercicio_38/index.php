<?php

$itens = ["Arroz","Frijoles","Sandía", "Naranja", "Carne"];

function listaParaString($arr){
    $str = "Tú llevou este itens del super: ";

    for($i = 0; $i < count($arr);$i++){
        if($i + 1 == count($arr)){
            $str .= "$arr[$i].";
        }else {
            $str .= "$arr[$i], ";
        }
    }

    return $str;
}

echo listaParaString($itens);