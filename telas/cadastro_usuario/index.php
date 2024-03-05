<?php
include("../../servicos/funcoes/usuario.func.php");
if(isset($_POST["cadastrar"])){
    try{
        $nome_completo = $_POST["nome_completo"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $senha_repetida = $_POST["senha_repetida"];
        CadUsuario($nome_completo, $email, $senha, $senha_repetida);
    }catch(Exception $e){
        echo "".$e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/login.css">
    <link rel="stylesheet" href="../padrao.css">
    <title>Cadastro Usuário</title>
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
                <h1 class="login-title">Crie uma conta</h1>
            </div>
            <form class="login-form" method="POST" action="../../servicos/usuarios/cadastrar_usuario.php">
            <!-- <form class="login-form" method="POST"> -->
                <div class="login-area-inputs">
                    <div class="input-group">
                        <label for="nome_completo">Nome completo</label>
                        <input type="text" name="nome_completo" placeholder="" required>
                    </div>
                    <div class="input-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="email@email.com" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Senha</label>
                        <input type="password" name="senha" placeholder="*************" required>
                    </div>
                    <div class="input-group">
                        <label for="senha_repetida">Confirme sua senha</label>
                        <input type="password" name="senha_repetida" placeholder="*************" required>
                    </div>
                </div>

                <input class="btn-principal" type="submit" name="cadastrar" value="Cadastrar">

                <span class="login-footer">Já tem uma conta? <a
                        href="../login">Entrar</a></span>
            </form>
        </div>
    </section>
</body>

</html>