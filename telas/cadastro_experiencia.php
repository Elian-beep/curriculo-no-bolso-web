<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Experiencia</title>
</head>
<body>
<form method="post" action="../servicos/gerenciamento/gerenciar_cadastro.php">
    <label for="empresa" >Nome da Empresa</label>
    <br>
    <input name="empresa" type="text" required>

    <br><br>

    <label for="cargo">Cargo Ocupado</label>
    <br>
    <input name="cargo" type="text" required>

    <br><br>
    
    <label for="inicio">Ano de Inicio</label>
    <input name="inicio" type="number" required>

    <br><br>

    <label for="termino">Ano de Termino</label>
    <input name="termino" type="number" required>

    <br><br>

    <label for="descricao">Descrição da Experiencia</label>
    <br>
    <textarea name="descricao" type="text" placeholder="Escreva Aqui"></textarea>

    <br>
    <input type="hidden" value="1" name="id_usuario">
    <input type="submit" name="cadastrar" value="Cadastrar" />

</form>
</body>
</html>