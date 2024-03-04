<?php
include_once("../servicos/config.php");

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
    <h1>Usuários</h1>
    <a href="cadastro_usuario.php">Novo usuário</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME COMPLETO</th>
                <th>E-MAIL</th>
                <th>CERTIFICAÇÕES</th>
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