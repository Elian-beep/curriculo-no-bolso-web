<?php
function CadastrarCurriculo($titulo, $numero_celular, $link_linkedin, $link_portfolio, $resumo_profissional, $id_usuario, $conexao){
    $sql = "INSERT INTO curriculos (titulo, numero_celular, link_linkedin, link_portfolio, resumo_profissional, id_usuario) VALUES ('$titulo', '$numero_celular', '$link_linkedin', '$link_portfolio', '$resumo_profissional', '$id_usuario');";
    $conexao->query($sql);
    $sql_novo = "SELECT id FROM curriculos ORDER BY id DESC LIMIT 1";
    $result = $conexao->query($sql_novo);
    $curriculos_id = mysqli_fetch_assoc($result);
    $id_curr = $curriculos_id["id"];
    header("Location: ../../formularios/formacoes/index.php?id_usuario=$id_usuario&id_curr=$id_curr");
}

function CadastrarFormacao($instituicao, $curso, $inicio, $termino, $id_tipo, $id_usuario, $id_curr, $conexao){
    // include_once("../config.php");
    // if(isset($_POST["cadastrar"])){
    //     $instituicao_formacao = $_POST[$instituicao];
    //     $curso_formacao = $_POST[$curso];
    //     $inicio_formacao = $_POST[$inicio];
    //     $termino_formacao = $_POST[$termino];
    //     $id_tipo_formacao =$_POST[$id_tipo];
    //     $id_usuario_formacao = $_POST[$id_usuario];
// }
        $sql = "INSERT INTO formacoes (instituicao, curso, inicio ,termino, id_tipo, id_usuario) VALUES ('$instituicao', '$curso', '$inicio' , '$termino', '$id_tipo', '$id_usuario');";
        $conexao->query($sql);
        $sql_novo = "SELECT id FROM formacoes ORDER BY id DESC LIMIT 1";
        $result = $conexao->query($sql_novo);
        $formacao_id = mysqli_fetch_assoc($result);
        $id_curr =$formacao_id["id"];
        // header("Location: ../../formularios/formacoes/index.php?id_usuario=$id_usuario&id_curr=$id_curr");
}
function CadastrarExperiencia($empresa, $cargo, $inicio, $termino, $descricao, $id_usuario){
    include_once("../config.php");
    // if(isset($_POST["cadastrar"])){
    //     $empresa_experiencia = $_POST[$empresa];
    //     $cargo_experiencia = $_POST[$cargo];
    //     $inicio_experiencia = $_POST[$inicio];
    //     $termino_experiencia = $_POST[$termino];
    //     $descricao_experiencia =$_POST[$descricao];
    //     $id_usuario_experiencia = $_POST[$id_usuario];
    // }
    
        $sql = "INSERT INTO experiencias (empresa, cargo, inicio ,termino, descricao, id_usuario) VALUES ('$empresa_experiencia', '$cargo_experiencia', '$inicio_experiencia' , '$termino_experiencia', '$descricao_experiencia', '$id_usuario_experiencia');";
        $result = $conexao->query($sql);
        
        $sql_novo = "SELECT id FROM experiencias ORDER BY id DESC LIMIT 1";
        $result_novo = $conexao->query($sql_novo);
        $experiencias_id_trago = mysqli_fetch_assoc($result_novo);
        $experiencias_id_trago["id"];
        
        header("Location: ../../telas/index_experiencias.php?id=$id_usuario_experiencia");
    }

function CadastrarCertificacao($instituicao, $curso, $termino, $descricao, $id_usuario){
    include_once("../config.php");
    if(isset($_POST["cadastrar"])){
        $instituicao_certificacao = $_POST[$instituicao];
        $curso_certificacao = $_POST[$curso];
        $termino_certificacao = $_POST[$termino];
        $descricao_certificacao = $_POST[$descricao];
        $id_usuario_certificacao = $_POST[$id_usuario];

        $sql = "INSERT INTO certificacoes (instituicao, curso, termino, descricao, id_usuario) VALUES ('$instituicao_certificacao', '$curso_certificacao', '$termino_certificacao', '$descricao_certificacao', '$id_usuario_certificacao');";
        $result = $conexao->query($sql);

        $sql_novo = "SELECT id FROM certificacoes ORDER BY id DESC LIMIT 1";
        $result_novo = $conexao->query($sql_novo);
        $certificacoes_id_trago = mysqli_fetch_assoc($result_novo);
        $certificacoes_id_trago["id"];

        header("Location: ../../telas/index_certificacoes.php?id=$id_usuario_certificacao");
    }else{
        header("Location: ../../telas/index_certificacoes.php?id=$id_usuario_certificacao");
    }
}


function CadastrarPremiacao($instituicao, $premiacao, $ano_premiacao, $descricao, $id_usuario){
    include_once("../config.php");
    if(isset($_POST["cadastrar"])){
        $instituicao_premiacao = $_POST[$instituicao];
        $curso_formacao_premiacao = $_POST[$premiacao];
        $inicio_formacao_premiacao = $_POST[$ano_premiacao];
        $termino_formacao_premiacao = $_POST[$descricao];
        $id_usuario_formacao_premiacao = $_POST[$id_usuario];
    
        $sql = "INSERT INTO premiacoes (instituicao, premiacao, ano_premiacao , descricao, id_usuario) VALUES ('$instituicao', '$premiacao', $ano_premiacao, '$descricao', '$id_usuario');";
        $result = $conexao->query($sql);

        $sql_novo = "SELECT id FROM premiacoes ORDER BY id DESC LIMIT 1";
        $result_novo = $conexao->query($sql_novo);
        $premiacao_id_trago = mysqli_fetch_assoc($result_novo);
        $premiacao_id_trago["id"];

        header("Location: ../../telas/index_premiacoes.php?id=$id_usuario_premiacao");
    }else{
        header("Location: ../../telas/index_premiacoes.php?id=$id_usuario_premiacao");
    }
}

?>