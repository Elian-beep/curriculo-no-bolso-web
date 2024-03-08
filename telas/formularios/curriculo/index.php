<?php
session_start();
include_once "../../../servicos/config.php";

if (!isset($_SESSION["email"]) && !isset($_SESSION["senha"])) {
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    header("Location: ../../login");
}
$id_usuario = $_GET['id'];
$logado = $_SESSION["email"];

if (isset($_POST["cadastrar"])) {
    include "../../../servicos/funcoes/cadastros.func.php";
    $titulo = $_POST["titulo"];
    $numero_celular = $_POST["numero_celular"];
    $link_linkedin = $_POST["link_linkedin"];
    $link_portfolio = $_POST["link_portfolio"];
    $resumo_profissional = $_POST["resumo_profissional"];
    $id_usuario = $_POST["id_usuario"];
    echo CadastrarCurriculo($titulo, $numero_celular, $link_linkedin, $link_portfolio, $resumo_profissional, $id_usuario, $conexao);
}
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
        <form action="" method="POST">
            <div>
                <span>Título do currículo</span>
                <?php echo $id_usuario ?>
                <input type="text" placeholder="titulo" name="titulo">
                <input type="text" placeholder="numero_celular" name="numero_celular">
                <input type="text" placeholder="link_linkedin" name="link_linkedin">
                <input type="text" placeholder="link_portfolio" name="link_portfolio">
                <textarea placeholder="resumo_profissional" name="resumo_profissional" id="" cols="30"
                    rows="10"></textarea>
                <input type="hidden" value="<?php echo $id_usuario ?>" name="id_usuario">
                <input type="submit" name="cadastrar">
            </div>
        </form>
    </main>
</body>

</html>