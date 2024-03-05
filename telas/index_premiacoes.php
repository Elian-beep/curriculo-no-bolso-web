<?php
include_once("../servicos/config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM premiacoes WHERE id_usuario = '$id';";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premiações</title>
</head>
<body>
    <h1>Premiações</h1>
    <a href="index_usuario.php">Voltar</a>
    <a href="cadastro_premiacao.php">Nova Premiação</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>INSTITUIÇÃO</th>
                <th>PREMIAÇÃO</th>
                <th>ANO_PREMIAÇÃO</th>
                <th>DESCRIÇÃO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>". $row["id"] ."</td>";
                echo "<td>". $row["instituicao"] ."</td>";
                echo "<td>". $row["premiacao"] ."</td>";
                echo "<td>". $row["ano_premiacao"] ."</td>";
                echo "<td>". $row["descricao"] ."</td>";
                echo 
                "<td>
                    <a href='../servicos/premiacoes/apagar_premiacao.php?id=$row[id]&id_usuario=$row[id_usuario]'>Excluir</a>
                    <a href='#'>Editar</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>