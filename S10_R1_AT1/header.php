<?php
// Pega o tema do cookie (se não existir, usa "claro")
$tema = isset($_COOKIE["tema"]) ? $_COOKIE["tema"] : "claro";

// Define as cores de acordo com o tema
if ($tema == "escuro") {
    $fundo = "#1e1e1e";
    $texto = "#ffffff";
} else {
    $fundo = "#f0f0f0";
    $texto = "#000000";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Mini Sistema</title>
    <style>
        body {
            background-color: <?php echo $fundo; ?>;
            color: <?php echo $texto; ?>;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .caixa {
            background-color: #ffffff;
            color: #000000;
            padding: 25px;
            border-radius: 10px;
            max-width: 400px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        input, select, button {
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            color: #2196F3;
            text-decoration: none;
        }
    </style>
</head>
<body>
