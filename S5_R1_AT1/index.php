<?php 
$empresa = "EmpresaC";
$numFun = 100;
$ativa = true;
$anos = 3;
$setor = "ADM";

echo "Nome da empresa:", $empresa , "<br>";
echo "Setor da empresa:" , $setor, "<br>";

// O if serve para ver se a empresa tem mais ou menos que 100 funcionários
if ($numFun >= 80) {
    echo "A empresa tem mais de 80 funcionários ativo! Com:", $numFun , " funcionários ativos! <br>"; 
} elseif ($numFun > 50) {
    echo "A empresa tem menos de 50 funcionários ativo! <br>";
} else {
    echo "Empresa nova/iniciante.";
}

// O "echo" é para exibir as informações na tela!
echo "Anos de mercado:", $anos , " anos <br>";
echo "Status da empresa:", $ativa ? "Ativa": "Inativa<br><br>";

echo "<br>";

// Já o switch é praticamente um "if", mas sendo um clean code(código limpo).
$dias = 1;
switch($dias) {
    case 1:
        echo "Segunda-feira, aberta.";
        break;
    case 2:
        echo "Terça-feira, aberta.";
        break;
    case 3:
        echo "Quarta-feira, aberta.";
        break;
    case 4:
        echo "Quinta-feira, aberta.";
        break;
    case 5:
        echo "Sexta-feira, aberta.";
        break;
    case 6:
        echo "Sabado, aberta.";
        break;
    case 7:
        echo "Domingo, fechada.";
        break;
    default:
    echo "Dia inválido!";

    }   
?>