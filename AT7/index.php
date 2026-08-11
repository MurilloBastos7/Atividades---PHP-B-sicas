<?php 
// Crie um array:
$funcionarios = ['Murillo','Miguel',"NIcollas"];
// Cria um for para listar os valores do array
for ($i = 0; $i<=4; $i++){
    echo "$funcionarios[$i]<br>";
}
echo "<hr>";
// Usando o foreach para percorrer o array
foreach($funcionarios as $funcionarios){
    echo "$funcionarios<br>";
}
echo "<hr>";

// Dicionario
$colaborador = [
    "nome" => "Murillo",
    "cargo" => "Estudante"
];
echo "Nome do colaborador:". $colaborador["nome"]."<br>";
echo "Cargo do colaborador:". $colaborador["cargo"]."<br>";

echo "<hr>";
// Criando arrays:
$colab = [
    ["nome" => "Nicollas",
    "idade" => "17",
    "cargo" => "Estudante"],

    ["nome" => "Sophie",
    "idade" => "16",
    "cargo" => "Estudante"],

    ["nome" => "Miguel",
    "idade" => "16",
    "cargo" => "Estudante"],

    ["nome" => "Murillo",
    "idade" => "16",
    "cargo" => "Estudante"],   
];

echo $colab[3]["nome"];
echo "<br>";

// Percorrendo todo o dicionario:
foreach($colab as $c){
    echo "Nome: ". $c["nome"], "<br>";
    echo "Idade: ". $c["idade"], "<br>";
    echo "Cargo: ". $c["cargo"], "<br>";
    echo "<hr>";
}
?>