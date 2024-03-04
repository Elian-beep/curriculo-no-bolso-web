<?php
include_once("../config.php");
if(!empty($_GET["id"])){
    $id = $_GET["id"];
    $id_usuario = $_GET["id_usuario"];

    $sqlSelect = "SELECT * FROM formacoes WHERE id='$id';";
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM formacoes WHERE id='$id';";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header("Location: ../../telas/index_formacoes.php?id=$id_usuario");
}else{
    header("Location: ../../telas/index_usuarios.php");
}

?>