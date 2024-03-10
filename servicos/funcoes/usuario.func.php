<?php
function CadUsuario($nome_completo, $email, $senha, $senha_repetida){
    include_once("../config.php");
    if(isset($_POST["cadastrar"])){
        $nome_completo = $_POST["nome_completo"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $senha_repetida = $_POST["senha_repetida"];
    
        if($senha != $senha_repetida){
            header("Location: ../../telas/cadastro_usuario");
            echo "senha repetida";
        }
        // Verificar se o email já está cadastrado
        $sql_verificar = "SELECT email FROM usuarios WHERE email = '$email'";
        $resultado_verificar = $conexao->query($sql_verificar);
        $row = $resultado_verificar->fetch_assoc();
        
        // Se o email já estiver cadastrado, apresentar mensagem e abortar
        if ($row['email'] > 0) {
            header("Location:../../telas/cadastro_usuario");
            echo "email repetido";
        }else{
            $sql = "INSERT INTO usuarios (nome_completo, email, senha) VALUES ('$nome_completo', '$email', '$senha');";
            $result = $conexao->query($sql);   
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header("Location:../../telas/principal");
        }
    }else{
        header("Location: ../../telas/login");
    }
}
?>
