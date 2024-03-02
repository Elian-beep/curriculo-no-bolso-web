<?php
include_once("../config.php");
if(isset($_POST["cadastrar"])){
    $instituicao = $_POST["instituicao"];
    $curso = $_POST["curso"];
    $descricao = $_POST["descricao"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "INSERT INTO certificacoes (instituicao, curso, descricao, id_usuario) VALUES ('$instituicao', '$curso', '$descricao', '$id_usuario');";
    $result = $conexao->query($sql);
    header("Location: ");
}else{
    header("Location: ");
}

?>