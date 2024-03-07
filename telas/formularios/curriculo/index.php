<?php
session_start();
include_once "../../../servicos/config.php";

if (!isset($_SESSION["email"]) && !isset($_SESSION["senha"])) {
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    header("Location: ../../login");
}
$logado = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../cabecalho/cabecalho.css">
    <link rel="stylesheet" href="../../padrao.css">
    <title>Novo currículo</title>
</head>

<body>
    <header class="cabecalho">
        <nav class="navbar">
            <h3 class="titulo">Currículo de Bolso</h3>
            <div class="nav-mobile">
                <button id="button-mobile-icon" class="button-mobile-icon">
                    <img src="../../imagens/icon-lista.svg" alt="ícone de menu sanduíche">
                </button>
                <ul id="nav-list-mobile" class="nav-list-mobile">
                    <li class="nav-item-mobile border-bottom"><a href="#">Criar currículo</a></li>
                    <li class="nav-item-mobile border-bottom"><a href="../../principal/index.php">Lsta de currículos</a>
                    </li>
                    <li class="nav-item-mobile border-bottom"><a href="#">Minha conta</a></li>
                    <li class="nav-item-mobile"><a href="../../../servicos/sair.php">Sair</a></li>
                </ul>
            </div>
            <ul class="nav-laptop">
                <li class="nav-item-laptop"><a href="#">Criar Currículo</a></li>
                <li class="nav-item-laptop"><a href="../../principal/index.php">Lista de currículos</a></li>
                <li class="nav-item-laptop"><a href="">Minha conta</a></li>
                <li class="nav-item-laptop"><a href="../../../servicos/sair.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="">
            <div>
                <span>Título do currículo</span>
            </div>
        </form>
    </main>
</body>

</html>