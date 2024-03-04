<?php
include_once("../config.php");
if(isset($_POST["cadastrar"])){
    $instituicao = $_POST["instituicao"];
    $curso = $_POST["curso"];
    $termino = $_POST["termino"];
    $descricao = $_POST["descricao"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "INSERT INTO certificacoes (instituicao, curso, termino, descricao, id_usuario) VALUES ('$instituicao', '$curso', '$termino', '$descricao', '$id_usuario');";
    $result = $conexao->query($sql);
    header("Location: ../../telas/index_certificacoes.php?id=$id_usuario");
}else{
    header("Location: ../../telas/index_certificacoes.php?id=$id_usuario");
}

?>