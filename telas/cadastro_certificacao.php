<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Certificado</title>
</head>
<body>

<form method="post" action="../servicos/gerenciamento/gerenciar_cadastro.php">

    <label for="instituicao">Nome da instituicao</label>
    <br>
    <input  name="instituicao" type="text" required>

    <br><br>

    <label for="curso">Nome do Curso</label>
    <br>
    <input name="curso" type="text" required>

    <label for="termino">Ano de Termino</label>
    <input name="termino" type="number" required>

    <br><br>

    <label for="descricao">Descrição do Certificado</label>
    <br>
    <textarea name="descricao" type="text" placeholder="Escreva Aqui"></textarea>

    <br>
    <input type="hidden" value="1" name="id_usuario">
    <input type="submit" name="cadastrar" value="Cadastrar" />

</form>
    
</body>
</html>