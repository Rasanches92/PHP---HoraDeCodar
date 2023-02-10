<?php

class Humanos{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostarConstantes(){
        echo self::BRACOS . "<br>";
    }
}

$pedro = new Humanos;

echo $pedro::OLHOS . "<br>";

$pedro->mostarConstantes();

?>