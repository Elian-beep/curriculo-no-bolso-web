<?php
include_once("../config.php");
if(isset($_POST["cadastrar"])){
    $instituicao = $_POST["instituicao"];
    $premiacao = $_POST["premiacao"];
    $ano_premiacao = $_POST["ano_premiacao"];
    $descricao =$_POST["descricao"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "INSERT INTO premiacoes (instituicao, premiacao, ano_premiacao , descricao, id_usuario) VALUES ('$instituicao', '$premiacao', $ano_premiacao, '$descricao', '$id_usuario');";
    $result = $conexao->query($sql);
    header("Location: ../../telas/index_premiacoes.php?id=$id_usuario");
}else{
    header("Location: ../../telas/index_premiacoes.php?id=$id_usuario");
}

?>