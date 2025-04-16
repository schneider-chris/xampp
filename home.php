<?php
include 'db.php';
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.html")
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Alberto Gomes Veiga</title>
    <link> rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <h1>Colegio Alberto Gomes Veiga</h1>
        <nav>
            <ul>
                <li><a href="#">Início</li>
                <li><a href="#">Sobre</li>
                <li><a href="#">Cursos</li>
                <li><a href="#">Contato</li>
                <li><a href="./logout.php"></a></li>
            </ul>
        </nav>
        <p class="login-status">Logado como:</p>
    </header>
