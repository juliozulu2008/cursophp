<?php 

class Pessoa {
    function falar(){
        echo "Olá Pessoal!";
    }

}

$julio = new Pessoa();

$julio->nome = "Julio";

echo $julio->nome;

echo "<br>";
$julio->falar();


//TIPO DE DADO NULL