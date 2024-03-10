<?php
$dbHost = "localhost";
$dbUsuario = "root";
$dbSenha = "";
$dbNome = "curriculo_de_bolso";

$conexao = new mysqli($dbHost, $dbUsuario, $dbSenha, $dbNome);

// if($conexao -> connect_errno){
//     echo"Erro: ". $conexao -> connect_error;
// }else{
//     echo"Conexão efetuada com sucesso";
// }
?>