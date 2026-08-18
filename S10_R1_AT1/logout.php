<?php
session_start();

// Apaga todas as variáveis da sessão
session_unset();
session_destroy();

// Volta para a página inicial
header("Location: index.php");
exit;
?>
