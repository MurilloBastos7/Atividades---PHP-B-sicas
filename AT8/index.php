<?php 
// Criando uma função "mostraMsg":
function mostraMsg(){
    echo "Sou uma função";
}
// Chamando a função "mostraMsg":
mostraMsg();

echo "<hr>";
function msgFlex($msg){
    echo "$msg";
}
msgFlex("Sou uma função com parametro");
echo "<br>";

echo "<hr>";
function somar($a,$b){
    echo "A soma é:". $a*$b;
}
somar(2,3);

echo "<hr>";
function subtrai($a,$b){
    return $a-$b;
}
$resposta = subtrai(10,1);
echo "A subtração é:". $resposta;

echo "<hr>";
function verificaIdade($idade){
    if ($idade >=18){
        return "Acesso concedido";
    } else {
        return "Acesso negado";
    }
}
echo verificaIdade(19);

echo "<hr>";
?>