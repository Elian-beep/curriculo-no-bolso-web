<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../padrao.css">
    <title>Login</title>
</head>

<body>
    <section class="login-container">
        <div class="login-banner">
            <p class="banner-topo">Currículo de Bolso</p>
            <div class="banner-content">
                <h2>Explore uma nova maneira de criar seus currículos de forma eficiente e profissional</h2>
                <h3>Crie currículos exclusivos para diferentes oportunidades e baixe em PDFs de alta qualidade com
                    apenas um clique.</h3>
            </div>
        </div>
        <div class="login-content">
            <div class="login-box-title">
                <h1 class="login-title">Faça login na sua conta</h1>
            </div>
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

                <input class="btn-principal" type="submit" name="logar" value="Entrar">

                <span class="login-footer">Ainda não tem uma conta? <a
                        href="../cadastro_usuario">Cadastrar</a></span>
            </form>
        </div>
    </section>
</body>

</html>