<?php
session_start();
include_once("../servicos/config.php");

if(!isset($_SESSION["email"]) == true && !isset( $_SESSION["senha"]) == true){
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    header("Location: login");
}

$logado = $_SESSION["email"];

$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <a href="login">Sair</a>
    <h1>Usuários</h1>
    <a href="cadastro_usuario.php">Novo usuário</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME COMPLETO</th>
                <th>E-MAIL</th>
                <th>CERTIFICAÇÕES</th>
                <th>EXPERIÊNCIAS</th>
                <th>FORMAÇÕES</th>
                <th>PREMIAÇÕES</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>". $row["id"] ."</td>";
                echo "<td>". $row["nome_completo"] ."</td>";
                echo "<td>". $row["email"] ."</td>";
                echo "<td><a href='index_certificacoes.php?id=$row[id]'>Ver certificações</a></td>";
                echo "<td><a href='index_experiencias.php?id=$row[id]'>Ver experiências</a></td>";
                echo "<td><a href='index_formacoes.php?id=$row[id]'>Ver formações</a></td>";
                echo "<td><a href='index_premiacoes.php?id=$row[id]'>Ver premiações</a></td>";
                echo 
                "<td>
                    <a href='../servicos/usuarios/apagar_usuario.php?id=$row[id]'>Excluir</a>
                    <a href='#'>Editar</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>