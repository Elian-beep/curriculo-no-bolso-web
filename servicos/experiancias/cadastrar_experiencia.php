<?php
include_once("../config.php");
if(isset($_POST["cadastrar"])){
    $empresa = $_POST["empresa"];
    $cargo = $_POST["cargo"];
    $inicio = $_POST["inicio"];
    $termino = $_POST["termino"];
    $descricao =$_POST["descricao"]
    $id_usuario = $_POST["id_usuario"];

    $sql = "INSERT INTO experiencias (empresa, cargo, inicio ,termino, descricao, id_usuario) VALUES ('$empresa', '$cargo', '$inicio' , '$termino', '$descricao', '$id_usuario');";
    $result = $conexao->query($sql);
    header("Location: ");
}else{
    header("Location: ");
}

?>