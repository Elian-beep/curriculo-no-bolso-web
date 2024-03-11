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
<html>
    <body>   
    <h1>";
$dados = $row_usuario['nome_completo'];
$dados .= "</h1>";
$dados .= "
<div>
        <span>INFORMAÇÕES DE CONTATO</span>
        </div>
        <div>";
$dados .= "
            <span>Telefone: <span>";
$dados .= $row_curr["numero_celular"];
$dados .= "
            </span>
            </span>
            <span>E-mail: <a href='mailto:";
$dados .= $row_usuario["email"];
$dados .= "}'>";
$dados .= $row_usuario["email"];
$dados .= "</a> 
            </span>";

if ($row_curr["link_linkedin"] != null) {
    $dados .= "
    <span>Linkedin: <a href='";
    $dados .= $row_curr["link_linkedin"];
    $dados .= "' >";
    $dados .= $row_curr["link_linkedin"];
    $dados .= "</a></span>";
}
if ($row_curr["link_portfolio"] != null) {
    $dados .= "
    <span>Portfólio: <a href='";
    $dados .= $row_curr["link_portfolio"];
    $dados .= "' >";
    $dados .= $row_curr["link_portfolio"];
    $dados .= "</a></span>";
}
if (mysqli_num_rows($result_formacoes) > 0) {
    $dados .= "<div><span>FORMAÇÃO ACADÊMICA</span></div>";
    while ($row_formacoes = mysqli_fetch_assoc($result_formacoes)) {
        $dados .= "<div><span>";
        $dados .= $row_formacoes["instituicao"];
        $dados .= "</span> | <span>";
        $dados .= $row_formacoes["inicio"] . " - " . $row_formacoes["termino"];
        $dados .= "</span></div><span>";
        $sql_tipo = "SELECT * FROM tipo_formacao WHERE id = $row_formacoes[id_tipo];";
        $result_tipo = $conexao->query($sql_tipo);
        $row_tipo = $result_tipo->fetch_assoc();
        $dados .= $row_tipo["descricao"] . " | " . $row_formacoes["curso"];
        $dados .= "</span>";
    }
}
if (mysqli_num_rows($result_experiencias) > 0) {
    $dados .= "<div><span>EXPERIÊNCIAS PROFISSIONAIS</span></div>";
    while ($row_experiencias = mysqli_fetch_assoc($result_experiencias)) {
        $dados .= "<div><span>";
        $dados .= $row_experiencias["empresa"];
        $dados .= "</span> | <span>";
        $dados .= $row_experiencias["inicio"] . " - " . $row_experiencias["termino"];
        $dados .= "</span></div><span>";
        $dados .= $row_experiencias["cargo"];
        $dados .= "</span><div><span>";
        $dados .= $row_experiencias["descricao"];
        $dados .= "</span></div>";
    }
}
if (mysqli_num_rows($result_certificacoes) > 0){
    $dados .= "<div><span>CERTIFICAÇÕES</span></div>";
    while ($row_certificacoes = mysqli_fetch_assoc($result_certificacoes)){
        $dados .= "<div><span>";
        $dados .= $row_certificacoes["curso"];
        $dados .= "</span> | <span>";
        $dados .= $row_certificacoes["instituicao"] . " - " . $row_certificacoes["termino"];
        $dados .= "</span></div><span>";
        $dados .= $row_certificacoes["descricao"];
        $dados .= "</span></div>";
    }
}
if (mysqli_num_rows($result_premiacoes) > 0){
    $dados .= "<div><span>PREMIAÇÕES</span></div>";
    while ($row_premiacoes = mysqli_fetch_assoc($result_premiacoes)){
        $dados .= "<div><span>";
        $dados .= $row_premiacoes["premiacao"];
        $dados .= "</span> | <span>";
        $dados .= $row_premiacoes["ano_premiacao"];
        $dados .= "</span></div><span>";
        $dados .= $row_premiacoes["descricao"];
        $dados .= "</span>";
    }
}
// $dados .= "";
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