<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Coloquei o título da página -->
    <title>Formulario</title>
</head>
<!-- Coloquei o titulo e uma frase explicando o formulário -->
<h2>Formulário Empresárial</h2>
<p>Preencha o <b>formulário</b> abaixo:</p>
<body>
     <!-- Criei o formulário e usei o método POST para enviar os dados -->
    <form action="" method="post">

        <!-- Criei um campo para colocar o nome -->
        <label for="nome">Nome: </label>
        <input type="text" name="nome"><br>

        <!-- Criei um campo para colocar o e-mail -->
        <label for="email">Email: </label>
        <input type="email" name="email"><br>

        <!-- Criei um campo para colocar a senha -->
        <label for="senha">Senha: </label>
        <input type="password" name="senha"><br>

        <!-- Coloquei um botão para enviar e outro para limpar -->
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
    <?php 
    if (isset($_POST["nome"], $_POST["email"], $_POST["senha"])){

        // Guardei as informações do formulário em variaveis
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Exibi elas na página
        echo "Seu nome: ". $nome, "<br>";
        echo "Seu email: ". $email, "<br>";
        echo "Sua senha: ". $senha, "<br>";
    };
    ?>
</body>
</html>