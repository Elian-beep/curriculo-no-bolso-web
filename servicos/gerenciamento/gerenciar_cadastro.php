<?php
include("../funcoes/cadastros.func.php");

// curriculo
echo cadastrar1_curriculo("titulo", "numero_celular", "link_linkedin", "link_portfolio", "resumo_profissional", "id_usuario");

//experiencia
echo cadastrar1_experiencia("empresa", "cargo", "inicio", "termino", "descricao", "id_usuario");

//certificacao
echo cadastrar1_certificacao("instituicao", "curso", "termino", "descricao", "id_usuario");

//formacao
echo cadastrar1_formacao("instituicao", "curso", "inicio", "termino", "id_tipo","id_usuario");

//premiacao
echo cadastrar1_premiacao("instituicao","premiacao","ano_premiacao","descricao","id_usuario");

?>

