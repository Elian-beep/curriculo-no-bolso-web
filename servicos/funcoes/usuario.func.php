<?php
function CadUsuario($nome_completo, $email, $senha, $senha_repetida)
{
    include_once("../config.php");
    $sql = "INSERT INTO usuarios (nome_completo, email, senha) VALUES ('$nome_completo', '$email', '$senha');";
    $result = $conexao->query($sql);
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header("Location: ../../telas/index_usuario.php");
}
?>