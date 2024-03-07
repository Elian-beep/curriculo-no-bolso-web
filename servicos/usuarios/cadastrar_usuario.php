<?php
include_once("../config.php");
if(isset($_POST["cadastrar"])){
    $nome_completo = $_POST["nome_completo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha_repetida = $_POST["senha_repetida"];

    if($senha != $senha_repetida){
        header("Location: ../../telas/cadastro_usuario");
    }else{
        $sql = "INSERT INTO usuarios (nome_completo, email, senha) VALUES ('$nome_completo', '$email', '$senha');";
        $result = $conexao->query($sql);
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header("Location: ../../telas/principal");
    }
}else{
    header("Location: ../../telas/principal");
}

?>