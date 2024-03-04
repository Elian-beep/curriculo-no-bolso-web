<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../cores.css">
    <title>Login</title>
</head>
<body>
    <section class="login-container">
        <div class="login-banner">
            <p class="banner-topo">Currículo de Bolso</p>
        </div>
        <div class="login-content">
            <h1 class="login-title">Faça login na sua conta</h1>
            <form class="login-form" method="POST" action="../../servicos/autenticacao.php">
                <div class="login-area-inputs">
                    <div class="input-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="email@email.com" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Senha</label>
                        <input type="password" name="senha" placeholder="*************" required>
                    </div>
                </div>

                <input class="login-btn" type="submit" name="logar" value="Entrar">

                <span class="login-footer">Ainda não tem uma conta? <a href="../../servicos/usuarios/cadastrar_usuario.php">Cadastrar</a></span>
            </form>
        </div>
    </section>
</body>
</html>