<?php 


echo "<i><b>TIPOS DE DADOS</b></i>";
echo "<hr>";
// Numeros Inteiros
echo "<b>INTEIROS</b>";
echo "<hr>";
echo 10;
echo "<br>";
echo 10+16;
echo "<br>";
echo -5;
echo "<br>";
echo -50 + 89;

$numero = 89;
echo "<br>";

if(is_int($numero)) {
    echo "O dado na Variavel 'numero' $numero é Inteiro";
} else {
    echo "o dado na variavel numero nao é inteiro";
}
//NUMEROS COM PONTO FLUTUANTE
echo "<hr>";
echo "<b>FLOAT</b>";
echo "<hr>";

$a = 1.2;

echo $a;
echo "<br>";
echo $a + 10;

if(is_float($a)){
    echo "O valor da Variavel 'a' $a é Float";
} else {
    echo " O valor da Variavel $a nao é float";
}
// STRINGS TEXTO
echo "<hr>";
echo "<b>STRINGS</b>";
echo "<hr>";

$nome = "Julio Cesar";
echo $nome;
echo "<br>";
echo $nome . " Dias dos santos";
echo "<br>";
if(is_string($nome)){
    echo "O valor da Variavel 'nome' $nome è uma string";
}

//BOOLEANOS TRUE OR FALSE
echo "<hr>";
echo "<b>BOOLEAN</b>";
echo "<hr>";

$alive = true;
echo "julio esta vivo". true;
echo "<br>";
if(is_bool($alive)){
    echo " O valor da variavel 'alive' $alive é um Booleano!";
}

//ARRAYS
echo "<hr>";
echo "<b>ARRAYS</b>";
echo "<hr>";

$array = [1,2,3,4,5];
#para exibir um array nao da para usar a funçao echo
print_r($array);
echo "<br>";
echo $array[2];
$array2 = ["julio", 26, true];
echo "<br>";
print_r($array2);
echo "<br>";
echo $array2[0];
#array assosiativo
$array3 = ["julio"=>"Marido", "kelly"=> "esposa"];
echo "<br>";
echo $array3["julio"];
echo "<br>";
if(is_array($array)){
    echo "Os Valores das Variaveis 'array' e 'array2'". print_r($array). print_r($array2). "Sao arrays";
}
echo "<br>";
$carro = ["marca"=> "fiat", "modelo"=> "uno", "ano"=> 2010, "Flex" => true];
print_r($carro);
echo $carro["marca"];

$marca = $carro["marca"];
echo "<br>";
echo $marca;
echo "<br>";
echo "<hr>";
// NULL

echo null;

$nome = null;

if(is_null($nome)){
    echo "O valor da variavel $ nome esta $nome Nulo";
}
