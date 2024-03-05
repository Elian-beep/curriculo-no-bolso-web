<?php
session_start();
include_once("../../servicos/config.php");

if(!isset($_SESSION["email"]) && !isset( $_SESSION["senha"])){
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    header("Location: ../login");
}
$logado = $_SESSION["email"];

$sql_select_usuario = "SELECT id FROM usuarios WHERE email = '$_SESSION[email]' and senha = '$_SESSION[senha]';";
$result_select_usuario = $conexao->query($sql_select_usuario);
if($result_select_usuario->num_rows > 0){
    $row_usuario = $result_select_usuario->fetch_assoc();
}


$sql_select_curr = "SELECT * FROM curriculos WHERE id_usuario = $row_usuario[id];";
$result_select_curr = $conexao->query($sql_select_curr);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cabecalho.css">
    <link rel="stylesheet" href="corpo.css">
    <link rel="stylesheet" href="../padrao.css">
    <title>Currículo de Bolso</title>
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
                    <li class="nav-item-mobile border-bottom"><a href="#">Lsta de currículos</a></li>
                    <li class="nav-item-mobile border-bottom"><a href="#">Criar currículo</a></li>
                    <li class="nav-item-mobile border-bottom"><a href="#">Minha conta</a></li>
                    <li class="nav-item-mobile"><a href="#">Sair</a></li>
                </ul>
            </div>
            <ul class="nav-laptop">
                <li class="nav-item-laptop"><a href="">Criar Currículo</a></li>
                <li class="nav-item-laptop"><a href="">Lista de currículos</a></li>
                <li class="nav-item-laptop"><a href="">Minha conta</a></li>
                <li class="nav-item-laptop"><a href="">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main class="prin-container">
        <div class="prin-alerta">
            <h2>OPS!</h2>
            <img src="../../imagens/imagem_doc.png" alt="ícone de criação de um novo documento">
            <p>Parece que ainda não há nenhum currículo criado. Toque no botão “Criar currículo” e crie seu primeiro currículo.</p>
            <div class="prin-btn">
                <a href="../login" class="btn-principal btn-a">Criar currículo</a>
            </div>
        </div>
    </main>

    <script src="menu_mobile.js"></script>
</body>
</html>