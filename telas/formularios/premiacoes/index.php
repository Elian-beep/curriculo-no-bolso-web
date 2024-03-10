<?php
session_start();
include_once "../../../servicos/config.php";

if (!isset($_SESSION["email"]) && !isset($_SESSION["senha"])) {
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    header("Location: ../../login");
}
$id_usuario = $_GET['id_usuario'];
$id_curr = $_GET['id_curr'];
$logado = $_SESSION["email"];

if (isset($_POST["adicionar"])) {
    include "../../../servicos/funcoes/cadastros.func.php";
    $instituicao = $_POST["instituicao"];
    $premiacao = $_POST["premiacao"];
    $ano_premiacao = $_POST["ano_premiacao"];
    $descricao = $_POST["descricao"];
    $id_usuario = $_POST["id_usuario"];
    echo CadastrarPremiacao($instituicao, $premiacao, $ano_premiacao, $descricao, $id_usuario, $id_curr, $conexao);
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../cabecalho/cabecalho.css">
    <link rel="stylesheet" href="../../padrao.css">
    <link rel="stylesheet" href="../formulario.css">
    <title>Premiações</title>
</head>

<body>
    <header class="cabecalho">
        <nav class="navbar">
            <h3 class="titulo">Currículo de Bolso</h3>
            <div class="nav-mobile">
                <button id="button-mobile-icon" class="button-mobile-icon">
                    <img src="../../../imagens/icon-lista.svg" alt="ícone de menu sanduíche">
                </button>
                <ul id="nav-list-mobile" class="nav-list-mobile">
                    <li class="nav-item-mobile border-bottom"><a href="../../principal/index.php">Lsta de currículos</a>
                    </li>
                    <li class="nav-item-mobile border-bottom"><a href="#">Criar currículo</a></li>
                    <li class="nav-item-mobile border-bottom"><a href="#">Minha conta</a></li>
                    <li class="nav-item-mobile"><a href="../../../servicos/sair.php">Sair</a></li>
                </ul>
            </div>
            <ul class="nav-laptop">
                <li class="nav-item-laptop"><a href="../../principal/index.php">Lista de currículos</a></li>
                <li class="nav-item-laptop"><a href="#">Criar Currículo</a></li>
                <li class="nav-item-laptop"><a href="">Minha conta</a></li>
                <li class="nav-item-laptop"><a href="../../../servicos/sair.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form class="formcurr" action="" method="POST">
            <input type="hidden" value="<?php echo $id_usuario ?>" name="id_usuario">
            <input type="hidden" value="<?php echo $id_curr ?>" name="id_curr">
            <span class="formcurr-titulo">Adicionar Premiação?</span>
            <div class="formcurr-container">
                <div class="formcurr-group">
                    <label class="formcurr-label-padrao" for="premiacao">Premiação <span>(obrigatório)</span></label>
                    <input class="formcurr-input-padrao" id="premiacao" required type="text" placeholder="Nome da premiacao"
                        name="premiacao">
                </div>
                <div class="formcurr-group">
                    <label class="formcurr-label-padrao" for="instituicao">Instituicao</label>
                    <input class="formcurr-input-padrao" id="instituicao" type="text" name="instituicao">
                </div>
                <div class="formcurr-group">
                    <label class="formcurr-label-padrao" for="ano_premiacao">Ano da Premiação</label>
                    <input class="formcurr-input-padrao" required id="ano_premiacao" type="number" name="ano_premiacao">
                </div>
                <div class="formcurr-group">
                    <label for="descricao" class="formcurr-label-padrao" id="descricao">Descrição da
                        premiacao</label>
                    <textarea placeholder="Digite sua descrição" class="formcurr-input-padrao" name="descricao"
                        id="descricao" cols="30" rows="10"></textarea>
                </div>
            </div>
            <input class="btn-principal" type="submit" value="Salvar" name="adicionar">
            <div class="form-duo-buttons">
                <a class="btn-principal btn-a" href="../../principal/index.php" name="finalizar">Finalizar currículo</a>
            </div>
        </form>
    </main>

    <script src="../../principal/menu_mobile.js"></script>
</body>

</html>