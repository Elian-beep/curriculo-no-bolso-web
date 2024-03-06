<?php
function cadastrar1_curriculo($titulo, $numero_celular, $link_linkedin, $link_portfolio, $resumo_profissional, $id_usuario){
    include_once("../config.php");
    if(isset($_POST["cadastrar"])){
        $titulo_curriculo = $_POST[$titulo];
        $numero_celular_curriculo = $_POST[$numero_celular];
        $link_linkedin_curriculo = $_POST[$link_linkedin];
        $link_portfolio_curriculo = $_POST[$link_portfolio];
        $resumo_profissional_curriculo = $_POST[$resumo_profissional];
        $id_usuario_curriculo = $_POST[$id_usuario];
        
        $sql = "INSERT INTO curriculos (titulo, numero_celular, link_linkedin, link_portfolio, resumo_profissional, id_usuario) VALUES ('$titulo_curriculo', '$numero_celular_curriculo', '$link_linkedin_curriculo', '$link_portfolio_curriculo', '$resumo_profissional_curriculo', '$id_usuario_curriculo');";
        
        $result = $conexao->query($sql);
        return header("Location: ../../telas/index_curriculos.php?id=$id_usuario_curriculo");
    }else{
        return header("Location: ../../telas/index_curriculos.php?id=$id_usuario_curriculo");
    }
    
}

// function retornar_id() {
//     include_once("../config.php");
//     $sql = "SELECT id FROM curriculos ORDER BY id DESC LIMIT 1";
//     $result = $conexao->query($sql);
//     $curriculo = mysqli_fetch_assoc($result);
//     return $curriculo["id"];
// }


?>