<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<h2>Formulário</h2>
<body>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome"><br>
        <label for="idade">Idade: </label>
        <input type="number" name="idade"><br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha"><br>
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
    <?php 
    if (isset($_POST["nome"], $_POST["idade"], $_POST["senha"])){
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $senha = $_POST["senha"];
        echo $nome;
        echo $idade;
        echo $senha;
    };
    ?>
</body>
</html>