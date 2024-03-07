<?php
session_start();
include_once "../../servicos/config.php";

if (!isset($_SESSION["email"]) && !isset($_SESSION["senha"])) {
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    header("Location: ../login");
}
$logado = $_SESSION["email"];

$sql_select_usuario = "SELECT id FROM usuarios WHERE email = '$_SESSION[email]' and senha = '$_SESSION[senha]';";
$result_select_usuario = $conexao->query($sql_select_usuario);
if ($result_select_usuario->num_rows > 0) {
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
    <link rel="stylesheet" href="corpo.css">
    <link rel="stylesheet" href="../cabecalho/cabecalho.css">
    <link rel="stylesheet" href="alerta/alerta.css">
    <link rel="stylesheet" href="tabela.css">
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
                    <li class="nav-item-mobile border-bottom"><a href="../formularios/curriculo/index.php">Criar currículo</a></li>
                    <li class="nav-item-mobile border-bottom"><a href="#">Lsta de currículos</a>
                    </li>
                    <li class="nav-item-mobile border-bottom"><a href="#">Minha conta</a></li>
                    <li class="nav-item-mobile"><a href="../../servicos/sair.php">Sair</a></li>
                </ul>
            </div>
            <ul class="nav-laptop">
                <li class="nav-item-laptop"><a href="../formularios/curriculo/index.php">Criar Currículo</a></li>
                <li class="nav-item-laptop"><a href="#">Lista de currículos</a></li>
                <li class="nav-item-laptop"><a href="">Minha conta</a></li>
                <li class="nav-item-laptop"><a href="../../servicos/sair.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main class="prin-container">
        <?php
        if (mysqli_num_rows($result_select_curr) > 0) {
            ?>
            <h2 class="curr-titulo">Lista de currículos</h2>
            <table class="curr-tabela">
                <thead class="curr-tabela-cabeca">
                    <tr class="curr-linha">
                        <th>ID</th>
                        <th>Título do currículo</th>
                        <th class="th-direita">Ações</th>
                    </tr>
                </thead>
                <tbody class="curr-tabela-corpo">
                    <?php
                    while ($row = mysqli_fetch_assoc($result_select_curr)) {
                        ?>
                        <tr class="curr-linha">
                            <td>
                                <?php echo $row["id"] ?>
                            </td>
                            <td>
                                <?php echo $row["titulo"] ?>
                            </td>
                            <td class="curr-icons">
                                <a href="">
                                    <img src="../../imagens/icon-caneta.svg" alt="ícone de lapis">
                                </a>
                                <a href="">
                                    <img src="../../imagens/icon-download.svg" alt="ícone de download">
                                </a>
                                <a href="../../servicos/curriculos/apagar_curriculo.php?id=<?php echo $row['id'] ?>">
                                    <img src="../../imagens/icon-lixeira.svg" alt="ícone de lixeira">
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            include "alerta/index.php";
        }
        ?>
    </main>

    <script src="menu_mobile.js"></script>
</body>

</html>