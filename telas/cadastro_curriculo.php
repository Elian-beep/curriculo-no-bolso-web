<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Curriculo</title>
</head>
<body>
<form method="post" action="../servicos/curriculos/cadastrar_curriculo.php" >
    <label for="titulo">Titulo</label>
    <br>
    <input name="titulo" type="text" required>

    <br><br>

    <label for="numero_celular">Numero de Celular</label>
    <br>
    <input name="numero_celular" type="number" required>

    <br><br>

    <label for="link_linkedin">Link do Linkedin</label>
    <br>
    <input name="link_linkedin" type="text" required>

    <br><br>

    <label for="link_portfolio">Link do PortFolio</label>
    <br>
    <input name="link_portfolio" type="text" required>

    <br><br>

    <label for="resumo_profissional">Resumo Profissional</label>
    <br>
    <textarea name="resumo_profissional" type="text" placeholder="Escreva Aqui" required></textarea>

    <br><br>

    <input type="hidden" value="1" name="id_usuario">
    <input type="submit" name="cadastrar" value="Cadastrar" />
   

</form>
</body>
</html>