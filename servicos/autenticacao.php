<?php
session_start();

if(isset($_POST["logar"]) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once('./config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND  senha = '$senha';";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ');
    }else{
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ');
    }
}else{
    header('Location: ');
}
?>