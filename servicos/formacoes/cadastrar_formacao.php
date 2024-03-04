<?php
include_once("../config.php");
if(isset($_POST["cadastrar"])){
    $instituicao = $_POST["instituicao"];
    $curso = $_POST["curso"];
    $inicio = $_POST["inicio"];
    $termino = $_POST["termino"];
    $id_tipo =$_POST["id_tipo"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "INSERT INTO formacoes (instituicao, curso, inicio ,termino, id_tipo, id_usuario) VALUES ('$instituicao', '$curso', '$inicio' , '$termino', '$id_tipo', '$id_usuario');";
    $result = $conexao->query($sql);
    header("Location: ../../telas/index_formacoes.php?id=$id_usuario");
}else{
    header("Location: ../../telas/index_formacoes.php?id=$id_usuario");
}

?>