<?php 
$anoAtual = 2026;
$anoFundacao = 2010;

$idadeEmpresa = $anoAtual - $anoFundacao;

$link = "https://github.com/MurilloBastos7";
echo "<a href='".$link."'\">Clique aqui</a>" , "<br>";
echo "A empresa tem: ". $anoAtual - $anoFundacao. " anos<br>";

echo $idadeEmpresa > 20 ? "Maio que 20":"Menor que 20";
?>