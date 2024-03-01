<?php
include_once("../config.php");
if(isset($_POST["alterar"])){
    $id = $_POST["id"];
    $nome_completo = $_POST["nome_completo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "UPDATE usuarios SET nome_completo='$nome_completo' , email= '$email', senha= '$senha';";
    $result = $conexao->query($sql);
}else{
    header("Location: ");
}

?>