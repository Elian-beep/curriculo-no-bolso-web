<?php
include_once("../config.php");
if(isset($_POST["cadastrar"])){
    $nome_completo = $_POST["nome_completo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO usuarios (nome_completo, email, senha) VALUES ('$nome_completo', '$email', '$senha');";
    $result = $conexao->query($sql);
    header("Location: ");
}else{
    header("Location: ");
}

?>