<?php
include_once("../servicos/config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM formacoes WHERE id_usuario = '$id';";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formações</title>
</head>
<body>
    <h1>Formações</h1>
    <a href="index_usuario.php">Voltar</a>
    <a href="cadastro_formacao.php">Nova formação</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>INSTITUIÇÃO</th>
                <th>CURSO</th>
                <th>INÍCIO</th>
                <th>TÉRMINO</th>
                <th>TIPO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>". $row["id"] ."</td>";
                echo "<td>". $row["instituicao"] ."</td>";
                echo "<td>". $row["curso"] ."</td>";
                echo "<td>". $row["inicio"] ."</td>";
                echo "<td>". $row["termino"] ."</td>";
                $sql_tipo = "SELECT descricao FROM tipo_formacao WHERE id='$row[id_tipo]'";
                $result_tipo = $conexao->query($sql_tipo);
                while ($row_tipo = mysqli_fetch_assoc($result_tipo)) {
                    echo "<td>". $row_tipo["descricao"] ."</td>";
                }
                echo 
                "<td>
                    <a href='../servicos/formacoes/apagar_formacao.php?id=$row[id]&id_usuario=$row[id_usuario]'>Excluir</a>
                    <a href='#'>Editar</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>