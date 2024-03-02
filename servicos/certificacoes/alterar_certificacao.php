<?php
include_once("../config.php");
if(isset($_POST["alterar"])){
    $id = $_POST["id"];
    $instituicao = $_POST["instituicao"];
    $curso = $_POST["curso"];
    $descricao = $_POST["descricao"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "UPDATE certificacoes SET instituicao='$instituicao' , curso= '$curso', descricao= '$descricao', id_usuario= '$id_usuario' WHERE id='$id';";
    $result = $conexao->query($sql);
}else{
    header("Location: ");
}

?>