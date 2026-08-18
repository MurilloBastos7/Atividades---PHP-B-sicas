<?php
include "config.php";

// Se já tiver nome na sessão, manda direto para o painel
if (isset($_SESSION["nome"])) {
    header("Location: painel.php");
    exit;
}

// Quando o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = trim($_POST["nome"]);
    $tema = $_POST["tema"];
    
    // Só continua se o nome não estiver vazio
    if (!empty($nome)) {
        // Salva o nome na sessão
        $_SESSION["nome"] = $nome;
        
        // Salva o tema no cookie
        setarTema($tema);
        
        // Redireciona para o painel
        header("Location: painel.php");
        exit;
    }
}
?>

<?php include "header.php"; ?>

<div class="caixa">
    <h2>Mini Sistema</h2>
    <p>Digite seu nome e escolha o tema:</p>
    
    <form method="POST" action="">
        <label>Seu nome:</label>
        <input type="text" name="nome" required placeholder="Ex: João">
        
        <label>Tema:</label>
        <select name="tema">
            <option value="claro">Claro</option>
            <option value="escuro">Escuro</option>
        </select>
        
        <button type="submit">Entrar</button>
    </form>
</div>

</body>
</html>
