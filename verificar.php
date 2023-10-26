<?php
# verificar.php
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha');

if($user=='miguel' && $senha=='123'){
    session_start();
    $_SESSION['nome'] = 'Miguel';
    header('Location:segura.php');
    exit;
}
header('Location:login.php?msg='.urlencode('ERRO: usuário ou senha incorreta!'));