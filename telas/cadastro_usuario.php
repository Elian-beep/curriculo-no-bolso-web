<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo usuário</title>
</head>

<body>
    <form method="post" action="../servicos/usuarios/cadastrar_usuario.php">
        <label for="nome_completo">Nome Completo</label>
        <br>
        <input name="nome_completo" type="text" placeholder="Digite seu Nome" required>

        <br><br>

        <label for="email">E-mail</label>
        <br>
        <input name="email" type="email" placeholder="Digite seu Email" required>

        <br><br>

        <label for="senha">Senha</label>
        <br>
        <input name="senha" type="password" placeholder="Digite sua Senha" required>
        <br>
        <input type="submit" name="cadastrar" value="Cadastrar" />


    </form>
</body>

</html>