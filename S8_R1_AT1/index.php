<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliária</title>
</head>
<h2>Empresa Cena Aprendiz</h2>
<body>
    <?php
    // Coloquei o nome do colaborador e cargo.
    $colaborador = [
    "nome" => "<b>Murillo</b>",
    "cargo" => "<b>Jovem Aprendiz</b>"
    ];
    echo "Nome do colaborador:". $colaborador["nome"]."<br>";
    echo "Cargo do colaborador:". $colaborador["cargo"]."<br>";

    echo "<hr>";

    // Fiz uma função para verificar se pode .
    echo "Função na empresa.<br>";
    function verif($idade){
        if ($idade >=18){
            return "Tem a opção de ser <b>Jovem Aprendiz</b> mas pode ser efetivado dentro da empresa!";
        } elseif($idade >=16) {
            return "Pode ser aprendiz!";
        } else {
            return "Não pode trabalhar ainda.";
        };
    };
    echo verif(18);
    echo "<hr>";

   echo "<b>Jovem Aprendiz</b><br>";

   // Hora extra
    echo "Hora extra.<br>";
    function hora($horas){
        if ($horas >=44){
            return "Pode fazer hora extra! Você contem 44 horas semanais ou mais...";
        } else {
            return "<b>Não pode</b> fazer hora extra!";
        };
    };
    echo hora(40);
    echo "<hr>";
    
    // Coloquei o link do meu GitHub!
    $link = "https://github.com/MurilloBastos7";
    echo "<a href='".$link."'\">Meu perfil no GitHub</a>" , "<br>";
    ?>
</body>
</html>