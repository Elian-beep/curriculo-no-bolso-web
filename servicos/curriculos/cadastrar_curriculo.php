<?php
include_once("../config.php");
if(isset($_POST["cadastrar"])){
    $titulo = $_POST["titulo"];
    $numero_celular = $_POST["numero_celular"];
    $link_linkedin = $_POST["link_linkedin"];
    $link_portfolio = $_POST["link_portfolio"];
    $resumo_profissional = $_POST["resumo_profissional"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "INSERT INTO curriculos (titulo, numero_celular, link_linkedin, link_portfolio, resumo_profissional, id_usuario) VALUES ('$titulo', '$numero_celular', '$link_linkedin', '$link_portfolio', '$resumo_profissional', '$id_usuario');";
    $result = $conexao->query($sql);
    header("Location: ../../telas/index_curriculos.php?id=$id_usuario");
}else{
    header("Location: ../../telas/index_curriculos.php?id=$id_usuario");
}

?>