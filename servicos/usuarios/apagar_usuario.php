<?php
include_once("../config.php");
if(!empty($_GET["id"])){
    $id = $_GET["id"];

    $sqlSelect = "SELECT * FROM usuarios WHERE id='$id';";
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM usuarios WHERE id='$id';";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header("Location: ../../telas/index_usuario.php");
}else{
    header("Location: ../../telas/index_usuario.php");
}

?>