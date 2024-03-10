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

$sql_tipo_formacao = "SELECT * FROM tipo_formacao;";
$result_tipo_formacao = $conexao->query($sql_tipo_formacao);

if (isset($_POST["adicionar"])) {
    include "../../../servicos/funcoes/cadastros.func.php";
    $instituicao = $_POST["instituicao"];
    $id_tipo = $_POST["id_tipo"];
    $curso = $_POST["curso"];
    $inicio = $_POST["inicio"];
    $termino = $_POST["termino"];
    echo CadastrarFormacao($instituicao, $curso, $inicio, $termino, $id_tipo, $id_usuario, $id_curr, $conexao);
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
    <title>Formação Acadêmica</title>
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
            <span class="formcurr-titulo">Adicionar Formação Acadêmica?</span>
            <div class="formcurr-container">
                <div class="formcurr-container formcurr-triplo">
                    <di v class="formcurr-group">
                        <label class="formcurr-label-padrao" for="instituicao">Instituição <span>(obrigatório)</span></label>
                        <input class="formcurr-input-padrao" id="instituicao" required type="text"
                            placeholder="Nome da instituição" name="instituicao">
                    </di>
                    <div class="formcurr-group">
                        <label class="formcurr-label-padrao" for="id_tipo">Tipo de formação</label>
                        <select class="formcurr-input-padrao" name="id_tipo" id="id_tipo">
                            <option value="">Selecione o tipo</option>
                            <?php
                            while ($row = mysqli_fetch_assoc($result_tipo_formacao)) {
                                echo "<option value='$row[id]'>$row[descricao]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="formcurr-group">
                        <label class="formcurr-label-padrao" for="curso">Curso (Apenas pra graduação ou técnico)</label>
                        <input class="formcurr-input-padrao" id="curso" type="text" name="curso">
                    </div>
                </div>

                <div class="formcurr-container formcurr-duo">
                    <div class="formcurr-group">
                        <label class="formcurr-label-padrao" for="inicio">Ano de início</label>
                        <input class="formcurr-input-padrao" required id="inicio" type="number" name="inicio">
                    </div>
                    <div class="formcurr-group">
                        <label class="formcurr-label-padrao" for="termino">Ano de término</label>
                        <input class="formcurr-input-padrao" required id="termino" type="number" name="termino">
                    </div>
                </div>
            </div>
            <input class="btn-principal btn-form" type="submit" value="Salvar" name="adicionar">
            <div class="form-duo-buttons">
                <a class="btn-amarelo btn-principal btn-a " href="../../formularios/experiencias/index.php?id_usuario=<?php echo $id_usuario ?>&id_curr=<?php echo $id_curr ?>" name="finalizar">Pular</a>
                <a class="btn-verde btn-principal btn-a " href="../../principal/index.php" name="finalizar">Finalizar currículo</a>
            </div>
        </form>
    </main>

    <script src="../../principal/menu_mobile.js"></script>
</body>

</html>