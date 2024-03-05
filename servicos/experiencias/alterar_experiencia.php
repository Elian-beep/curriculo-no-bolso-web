<?php
include_once("../config.php");
if(isset($_POST["alterar"])){
    $id = $_POST["id"];
    $empresa = $_POST["empresa"];
    $cargo = $_POST["cargo"];
    $inicio = $_POST["inicio"];
    $termino = $_POST["termino"];
    $descricao = $_POST["descricao"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "UPDATE experiencias SET empresa= '$empresa' , cargo= '$cargo', inicio= '$inicio', termino= '$termino', descricao= '$descricao' , id_usuario= '$id_usuario' WHERE id='$id';";
    $result = $conexao->query($sql);
}else{
    header("Location: ");
}

?>