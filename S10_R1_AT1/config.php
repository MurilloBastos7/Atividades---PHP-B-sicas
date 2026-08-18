<?php
// Inicia a sessão
session_start();

// Função para salvar o tema no cookie (válido por 30 dias)
function setarTema($tema) {
    setcookie("tema", $tema, time() + (30 * 24 * 60 * 60), "/");
}
?>
