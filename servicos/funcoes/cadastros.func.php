<?php
function CadastrarCurriculo($titulo, $numero_celular, $link_linkedin, $link_portfolio, $resumo_profissional, $id_usuario, $conexao)
{
    $sql = "INSERT INTO curriculos (titulo, numero_celular, link_linkedin, link_portfolio, resumo_profissional, id_usuario) VALUES ('$titulo', '$numero_celular', '$link_linkedin', '$link_portfolio', '$resumo_profissional', '$id_usuario');";
    $conexao->query($sql);
    $sql_novo = "SELECT id FROM curriculos ORDER BY id DESC LIMIT 1";
    $result = $conexao->query($sql_novo);
    $curriculos = mysqli_fetch_assoc($result);
    $id_curr = $curriculos["id"];
    header("Location: ../../formularios/formacoes/index.php?id_usuario=$id_usuario&id_curr=$id_curr");
}

function CadastrarFormacao($instituicao, $curso, $inicio, $termino, $id_tipo, $id_usuario, $id_curr, $conexao)
{
    $sql = "INSERT INTO formacoes (instituicao, curso, inicio ,termino, id_tipo, id_usuario) VALUES ('$instituicao', '$curso', '$inicio' , '$termino', '$id_tipo', '$id_usuario');";
    $conexao->query($sql);
    $sql_novo = "SELECT id FROM formacoes ORDER BY id DESC LIMIT 1";
    $result = $conexao->query($sql_novo);
    $formacao = mysqli_fetch_assoc($result);
    $id_formacao = $formacao["id"];

    $sql_relacao = "INSERT INTO curriculos_formacoes (id_curriculos, id_formacoes) VALUES ('$id_curr', '$id_formacao');";
    $conexao->query($sql_relacao);

    header("Location: ../../formularios/formacoes/index.php?id_usuario=$id_usuario&id_curr=$id_curr");
}
function CadastrarExperiencia($empresa, $cargo, $inicio, $termino, $descricao, $id_usuario, $id_curr, $conexao)
{

    $sql = "INSERT INTO experiencias (empresa, cargo, inicio ,termino, descricao, id_usuario) VALUES ('$empresa', '$cargo', '$inicio' , '$termino', '$descricao', '$id_usuario');";
    $conexao->query($sql);

    $sql_novo = "SELECT id FROM experiencias ORDER BY id DESC LIMIT 1";
    $result = $conexao->query($sql_novo);
    $experiencia = mysqli_fetch_assoc($result);
    $id_experiencia = $experiencia["id"];

    $sql_relacao = "INSERT INTO curriculos_experiencias (id_curriculos, id_experiencias) VALUES ('$id_curr', '$id_experiencia');";
    $conexao->query($sql_relacao);

    header("Location: ../../formularios/experiencias/index.php?id_usuario=$id_usuario&id_curr=$id_curr");
}

function CadastrarCertificacao($instituicao, $curso, $termino, $descricao, $id_usuario, $id_curr, $conexao)
{
    $sql = "INSERT INTO certificacoes (instituicao, curso, termino, descricao, id_usuario) VALUES ('$instituicao', '$curso', '$termino', '$descricao', '$id_usuario');";
    $conexao->query($sql);

    $sql_novo = "SELECT id FROM certificacoes ORDER BY id DESC LIMIT 1";
    $result = $conexao->query($sql_novo);
    $certificacao = mysqli_fetch_assoc($result);
    $id_certificacao = $certificacao["id"];

    $sql_relacao = "INSERT INTO curriculos_certificacoes (id_curriculos, id_certificacoes) VALUES ('$id_curr', '$id_certificacao');";
    $conexao->query($sql_relacao);

    header("Location: ../../formularios/certificacoes/index.php?id_usuario=$id_usuario&id_curr=$id_curr");
}


function CadastrarPremiacao($instituicao, $premiacao, $ano_premiacao, $descricao, $id_usuario)
{
    include_once("../config.php");
    if (isset($_POST["cadastrar"])) {
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
    } else {
        header("Location: ../../telas/index_premiacoes.php?id=$id_usuario_premiacao");
    }
}

?>