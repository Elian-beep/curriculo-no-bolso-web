<?php
include_once("../config.php");
if(isset($_POST["alterar"])){
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $numero_celular = $_POST["numero_celular"];
    $link_linkedin = $_POST["link_linkedin"];
    $link_portfolio = $_POST["link_portfolio"];
    $resumo_profissional = $_POST["resumo_profissional"];
    $id_usuario = $_POST["id_usuario"];

    $sql = "UPDATE curriculos SET titulo= '$titulo' , numero_celular= '$numero_celular', link_linkedin= '$link_linkedin', link_portfolio= '$link_portfolio' , resumo_profissional= '$resumo_profissional' , id_usuario= '$id_usuario' WHERE id='$id';";
    $result = $conexao->query($sql);
}else{
    header("Location: ");
}

?>