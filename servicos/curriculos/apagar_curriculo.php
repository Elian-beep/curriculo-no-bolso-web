<?php
include_once("../config.php");
if(!empty($_GET["id"])){
    $id = $_GET["id"];
    $id_usuario = $_GET["id_usuario"];

    $sqlSelect = "SELECT * FROM curriculos WHERE id='$id';";
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM curriculos WHERE id='$id';";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header("Location: ../../telas/principal");
}else{
    header("Location: ../../telas/principal");
}

?>