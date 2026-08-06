<?php 
$funcionario = 50;

if ($funcionario >= 50) {
    // Se a empresa for maior ou igual a 50, empresa grande
    echo "Empresa de grande porte";
} elseif ($funcionario > 40) {
    // Se, se não, médio porte
    echo "Empresa de médio porte";
} else {
    // Senão empresa pequena
    echo "Empresa pequena";
}
?>