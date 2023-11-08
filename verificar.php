<?php
# verificar.php
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha');

# buscar a linha do usuário pelo e-mail (user) fornecido
# depois, comparar a senha fornecida

require 'conexao.php';
$sql = "SELECT * FROM usuario WHERE email='$user'";
# busca o primeiro user encontrado com este email
$u = $conn->query($sql)->fetch();

# se não achou com este e-mail
if(!$u){
    header('Location:login.php?msg='.urlencode('e-mail não encontrado'));
    exit;
}

# verificar se a senha confere
if(password_verify($senha, $u['senha'])){
    session_start();
    $_SESSION['nome'] = $u['nome'];
    header('Location:segura.php');
    exit;
}

# senha não confere
header('Location:login.php?msg='.urlencode('Senha incorreta. Tente novamente.'));
exit;