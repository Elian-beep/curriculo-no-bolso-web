<?php
include_once("../servicos/config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM certificacoes WHERE id_usuario = '$id';";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificações</title>
</head>
<body>
    <h1>Certificações</h1>
    <a href="index_usuario.php">Voltar</a>
    <a href="cadastro_certificacao.php">Nova certificação</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>INSTITUIÇÃO</th>
                <th>CURSO</th>
                <th>TÉRMINO</th>
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
                echo "<td>". $row["curso"] ."</td>";
                echo "<td>". $row["termino"] ."</td>";
                echo "<td>". $row["descricao"] ."</td>";
                echo 
                "<td>
                    <a href='../servicos/certificacoes/apagar_certificacao.php?id=$row[id]&id_usuario=$row[id_usuario]'>Excluir</a>
                    <a href='#'>Editar</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>