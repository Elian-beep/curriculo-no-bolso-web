<?php
include_once("../servicos/config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM curriculos WHERE id_usuario = '$id';";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculos</title>
</head>
<body>
    <h1>Curriculos</h1>
    <a href="index_usuario.php">Voltar</a>
    <a href="cadastro_curriculo.php">Novo Curriculo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>NUMERO_CELULAR</th>
                <th>LINK_LINKEDIN</th>
                <th>LINK_PORTFOLIO</th>
                <th>RESUMO_PROFISSIONAL</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>". $row["id"] ."</td>";
                echo "<td>". $row["titulo"] ."</td>";
                echo "<td>". $row["numero_celular"] ."</td>";
                echo "<td>". $row["link_linkedin"] ."</td>";
                echo "<td>". $row["link_portfolio"] ."</td>";
                echo "<td>". $row["resumo_profissional"] ."</td>";
                echo 
                "<td>
                    <a href='../servicos/curriculos/apagar_curriculo.php?id=$row[id]&id_usuario=$row[id_usuario]'>Excluir</a>
                    <a href='#'>Editar</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>