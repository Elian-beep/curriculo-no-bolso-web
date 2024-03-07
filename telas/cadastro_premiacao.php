<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Premiações</title>
</head>
<body>

    <form method="post" action="../servicos/gerenciamento/gerenciar_cadastro.php">
        <label for="instituicao" >Nome da Instituicao</label>
        <br>
        <input name="instituicao" type="text" required>
    
        <br><br>
    
        <label for="premiacao">Titulo da Premiacao</label>
        <br>
        <input name="premiacao" type="text" required>
    
        <br><br>
        
        <label for="ano_premiacao">Ano da Premiação</label>
        <input name="ano_premiacao" type="number" required>
    
        <br><br>
    
        <label for="descricao">Descrição da Premiação</label>
        <br>
        <textarea name="descricao" type="text" placeholder="Escreva Aqui"></textarea>
    
        <br>
        <input type="hidden" value="1" name="id_usuario">
        <input type="submit" name="cadastrar" value="Cadastrar" />
    
    </form>    
    
</body>
</html>