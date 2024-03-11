<?php
require '../dompdf/vendor/autoload.php';
require '../config.php';

$id_usuario = $_GET["id_usuario"];
$id_curr = $_GET["id_curr"];

$sql_usuario = "SELECT * FROM usuarios WHERE id = $id_usuario;";
$result_usuario = $conexao->query($sql_usuario);
$row_usuario = $result_usuario->fetch_assoc();

$sql_curr = "SELECT * FROM curriculos WHERE id = $id_curr;";
$result_curr = $conexao->query($sql_curr);
$row_curr = $result_curr->fetch_assoc();

$sql_formacoes = "SELECT * FROM formacoes WHERE id_curriculo = $id_curr;";
$result_formacoes = $conexao->query($sql_formacoes);

$sql_experiencias = "SELECT * FROM experiencias WHERE id_curriculo = $id_curr;";
$result_experiencias = $conexao->query($sql_experiencias);

$sql_certificacoes = "SELECT * FROM certificacoes WHERE id_curriculo = $id_curr;";
$result_certificacoes = $conexao->query($sql_certificacoes);

$sql_premiacoes = "SELECT * FROM premiacoes WHERE id_curriculo = $id_curr;";
$result_premiacoes = $conexao->query($sql_premiacoes);

use Dompdf\Dompdf;

$dompdf = new Dompdf(['enable_remote' => true]);
$dados = "
<body style='font-family: Calibri, sans-serif; padding: 25px 20px;'>   
    <h1 style='text-align: center; font-size: 14pt;'>";
$dados = $row_usuario['nome_completo'];
$dados .= "</h1>";
$dados .= "
<div style='border-bottom: 1px solid black; margin-top: 10px;'>
    <span style='font-weight: 700; font-size: 12pt;'>
        INFORMAÇÕES DE CONTATO
    </span>
</div>
<div style='display: flex; flex-direction: column;'>";
$dados .= "<span style='font-size: 11pt;font-weight: 700;'>Telefone: <span>". $row_curr["numero_celular"]. "</span></span>";
$dados .= "<span style='font-size: 11pt; font-weight: 700;'>E-mail: <a href='mailto:". $row_usuario["email"]. "'>". $row_usuario["email"]. "</a></span>";

if ($row_curr["link_linkedin"] != null) {
    $dados .= "
    <span style='font-size: 11pt; font-weight: 700;'>Linkedin: <a href='";
    $dados .= $row_curr["link_linkedin"];
    $dados .= "' >";
    $dados .= $row_curr["link_linkedin"];
    $dados .= "</a></span>";
}
if ($row_curr["link_portfolio"] != null) {
    $dados .= "
    <span style='font-size: 11pt; font-weight: 700;'>Portfólio: <a href='";
    $dados .= $row_curr["link_portfolio"];
    $dados .= "' >";
    $dados .= $row_curr["link_portfolio"];
    $dados .= "</a></span>";
}
if (mysqli_num_rows($result_formacoes) > 0) {
    $dados .= "<div style='border-bottom: 1px solid black; margin-top: 10px;'>
        <span style='font-weight: 700; font-size: 12pt;'>
            FORMAÇÃO ACADÊMICA
        </span>
    </div>";
    while ($row_formacoes = mysqli_fetch_assoc($result_formacoes)) {
        $dados .= "<div><span style='font-weight: 700; font-size: 11pt;'>";
        $dados .= $row_formacoes["instituicao"];
        $dados .= "</span> | <span style='font-size: 11pt;'>";
        $dados .= $row_formacoes["inicio"] . " - " . $row_formacoes["termino"];
        $dados .= "</span></div><span style='font-size: 11pt; font-style: italic;'>";
        $sql_tipo = "SELECT * FROM tipo_formacao WHERE id = $row_formacoes[id_tipo];";
        $result_tipo = $conexao->query($sql_tipo);
        $row_tipo = $result_tipo->fetch_assoc();
        $dados .= $row_tipo["descricao"] . " | " . $row_formacoes["curso"];
        $dados .= "</span>";
    }
}
if (mysqli_num_rows($result_experiencias) > 0) {
    $dados .= "<div style='border-bottom: 1px solid black; margin-top: 10px;'>
        <span style='font-weight: 700; font-size: 12pt;'>
            EXPERIÊNCIAS PROFISSIONAIS
        </span>
    </div>";
    while ($row_experiencias = mysqli_fetch_assoc($result_experiencias)) {
        $dados .= "<div><span style='font-weight: 700;font-size: 11pt;'>";
        $dados .= $row_experiencias["empresa"];
        $dados .= "</span> | <span style='font-size: 11pt;'>";
        $dados .= $row_experiencias["inicio"] . " - " . $row_experiencias["termino"];
        $dados .= "</span></div><span style='font-size: 11pt; font-style: italic;'>";
        $dados .= $row_experiencias["cargo"];
        $dados .= "</span><div><span style='font-size: 11pt; text-align: justify;'>";
        $dados .= $row_experiencias["descricao"];
        $dados .= "</span></div>";
    }
}
if (mysqli_num_rows($result_certificacoes) > 0) {
    $dados .= "<div style='border-bottom: 1px solid black; margin-top: 10px;'>
        <span style='font-weight: 700; font-size: 12pt;'>
            CERTIFICAÇÕES
        </span>
    </div>";
    while ($row_certificacoes = mysqli_fetch_assoc($result_certificacoes)) {
        $dados .= "<div><span style='font-weight: 700; font-size: 11pt;'>";
        $dados .= $row_certificacoes["curso"];
        $dados .= "</span> | <span style='font-size: 11pt;'>";
        $dados .= $row_certificacoes["instituicao"] . " - " . $row_certificacoes["termino"];
        $dados .= "</span></div><span style='font-size: 11pt; text-align: justify;'>";
        $dados .= $row_certificacoes["descricao"];
        $dados .= "</span></div>";
    }
}
if (mysqli_num_rows($result_premiacoes) > 0) {
    $dados .= "<div style='border-bottom: 1px solid black; margin-top: 10px;'>
        <span style='font-weight: 700; font-size: 12pt;'>
            PREMIAÇÕES
        </span>
    </div>";
    while ($row_premiacoes = mysqli_fetch_assoc($result_premiacoes)) {
        $dados .= "<div><span style='font-weight: 700; font-size: 11pt;'>";
        $dados .= $row_premiacoes["premiacao"];
        $dados .= "</span> | <span style='font-size: 11pt;'>";
        $dados .= $row_premiacoes["ano_premiacao"];
        $dados .= "</span></div><span style='font-size: 11pt; text-align: justify;'>";
        $dados .= $row_premiacoes["descricao"];
        $dados .= "</span>";
    }
}
$dados .= "
</div>
</body>
</html>
";
$dompdf->load_html($dados);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream();
?>