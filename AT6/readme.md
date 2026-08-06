Código `case.php`
---
```bash
<?php 
// Exemplo de switch case:
$dia = 4;
switch($dia) {
    case 1:
        echo "Segunda";
        break;
    
    case 2:
        echo "Terça";
        break;
    
    case 3:
        echo "Quarta";
        break;
    
    case 4:
        echo "Quinta";
        break;

    case 5:
        echo "Sexta";
        break;

    case 6:
        echo "Sabado";
        break;

    case 7:
        echo "Domingo";
        break;

    default:
    echo "Dia inválido!";
}
?>
```
Código `if.php`
---

```bash
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
```
