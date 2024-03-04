<?php
include_once("../servicos/config.php");
$sql = "SELECT * FROM tipo_formacao;";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Formação</title>
</head>
<body>
<form method="post" action="../servicos/formacoes/cadastrar_formacao.php" >

    <label for="instituicao">Nome da Instituição</label>
    <br>
    <input name="instituicao" type="text" required>

    <br><br>

    <label for="curso">Nome do Curso</label>
    <br>
    <input name="curso" type="text" required>

    <br><br>

    <label for="inicio">Ano de Inicio</label>
    <input name="inicio" type="number" required>

    <br><br>

    <label for="termino">Ano de Termino</label>
    <input name="termino" type="number" required>

    <br><br>
    <select name="id_tipo" id="id_tipo">
        <option value="null">Escolha uma das opções</option>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<option value='$row[id]'>$row[descricao]</option>";
        }
        ?>
    </select>

    <input type="hidden" value="1" name="id_tipo">
    <input type="hidden" value="1" name="id_usuario">
    <input type="submit" name="cadastrar" value="Cadastrar" />

</form>
</body>
</html>