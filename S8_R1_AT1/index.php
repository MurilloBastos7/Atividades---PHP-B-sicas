<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autonomia Assistida</title>
</head>
<h2>Atividade S8_R1_AT1</h2>
<body>
    <?php 
    // User uma função para fazer soma(adição)
    echo "Função 1<br>";
    function adicao($a,$b){
        echo "A soma é:". $a + $b;
    };
    adicao(10,90);
    echo "<hr>";

    // Essa faz multiplicação
    echo "Função 2<br>";
    function multi($a,$b){
        echo "A multplicação é de:". $a*$b;
    };
    multi(100,9);
    echo "<hr>";
    
    // Já essa faz uma verificação de idade
    echo "Função 3<br>";
    function verif($idade){
        if ($idade >=15){
            return "Pode jogar bola!";
        } else {
            return "Não pode jogar bola!";
        };
    };
    echo verif(16);
    echo "<hr>";
    
    // Coloquei o link do meu GitHub!
    $link = "https://github.com/MurilloBastos7";
    echo "<a href='".$link."'\">Meu perfil no GitHub</a>" , "<br>";
    ?>
</body>
</html>