<?php
include_once("../config.php");
if(!empty($_GET["id"])){
    $id = $_GET["id"];

    $sqlSelect = "SELECT * FROM certificacoes WHERE id='$id';";
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM certificacoes WHERE id='$id';";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header("Location: ");
}else{
    header("Location: ");
}

?>