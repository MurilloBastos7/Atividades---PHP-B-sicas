<?php 
$nome = "Murillo";
$dinAtual = 26;
$salario = 1000;
$poupanca = $salario * 0.5; 

echo "O nome do cliente é:". $nome , "<br>";
echo "Dinheiro atual R$:". $dinAtual , "<br>";
echo "Quanto vai receber esse mês:" , "R$". $salario , "<br>";
echo "Quanto vai investir:". $poupanca , "<br><br>";
echo $poupanca ? "Maior que 250": "Menor que 250" , "<br>";
echo "Quando vai ter em 1 ano:". $poupanca * 12; // quanto ele vai ter em 1 ano, juntando 500 por mes

// Fiz exibir o nome do cliente, dinheiro atual, quanto vai receber e quanto vai investir!
// Fiz também se ele vai investir mais ou menos que 250

?>