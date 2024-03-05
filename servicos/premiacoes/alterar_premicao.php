<?php
include_once("../config.php");
if(isset($_POST["alterar"])){
    $id = $_POST["id"];
    $instituicao = $_POST["instituicao"];
    $premiacao = $_POST["premiacao"];
    $ano_premiacao = $_POST["ano_premiacao"];
    $descricao = $_POST["descricao"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "UPDATE premiacoes SET instituicao='$instituicao' , premiacao= '$premiacao',ano_premiacao= '$ano_premiacao', descricao= '$descricao', id_usuario= '$id_usuario' WHERE id='$id';";
    $result = $conexao->query($sql);
}else{
    header("Location: ");
}

?>