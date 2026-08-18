<?php
include "config.php";

// Se não tiver nome na sessão, volta para o início
if (!isset($_SESSION["nome"])) {
    header("Location: index.php");
    exit;
}

// Pega as informações
$nome = $_SESSION["nome"];
$tema = isset($_COOKIE["tema"]) ? $_COOKIE["tema"] : "claro";
?>

<?php include "header.php"; ?>

<div class="caixa">
    <h2>Olá, <?php echo htmlspecialchars($nome); ?>!</h2>
    
    <p><strong>Nome (Sessão):</strong> <?php echo htmlspecialchars($nome); ?></p>
    <p><strong>Tema (Cookie):</strong> <?php echo $tema; ?></p>
    
    <br>
    <a href="logout.php">Sair do sistema</a>
</div>

</body>
</html>
