<?php 
// Coloquei o nome e a descrição da empresa.
echo "<h1>Empresa: Cena Imobiliário</h1>";
echo "<h4>Conectando você ao imóvel ideal. Encontre casas, apartamentos e oportunidades com praticidade, confiança e segurança para realizar seus planos.</h4>";

// no "$funcionarios" coloquei as informações dos colaboradores como nome, idade, etc...
$funcionarios = [
    ["nome" => "Murillo",
    "cargo" => "TI Junior",
    "setor" => "Adm",
    "idade" => "23",],

    ["nome" => "Nicollas",
    "cargo" => "TI Superior",
    "setor" => "Adm",
    "idade" => "27",],

    ["nome" => "Victor",
    "cargo" => "Desenvolvedor de Software",
    "setor" => "Adm",
    "idade" => "32",],

    ["nome" => "Miguel",
    "cargo" => "TI Iniciante",
    "setor" => "Adm",
    "idade" => "19",],
];
// Já nesse "<hr>" serve para colocar uma linha que divide as informações no navegador
echo "<hr>";

// o comando "foreach" serve para exibir todas as infomações dos usuarios de uma só vez!
foreach($funcionarios as $f) {
    echo "Nome do colaborador:". $f["nome"], "<br>";
    echo "Cargo do colaborador:". $f["cargo"], "<br>";
    echo "Setor do colaborador:". $f["setor"], "<br>";
    echo "Idade do colaborador:". $f["idade"], "<br>";
    echo "<hr>";
};
?>