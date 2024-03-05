<?php
include_once("../config.php");
if(isset($_POST["alterar"])){
    $id = $_POST["id"];
    $instituicao = $_POST["instituicao"];
    $curso = $_POST["curso"];
    $inicio = $_POST["inicio"];
    $termino = $_POST["termino"];
    $id_tipo = $_POST["id_tipo"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "UPDATE formacoes SET instituicao='$instituicao' , curso= '$curso',inicio= '$inicio', termino= '$termino', id_tipo= '$id_tipo' , id_usuario= '$id_usuario' WHERE id='$id';";
    $result = $conexao->query($sql);
}else{
    header("Location: ");
}

?>