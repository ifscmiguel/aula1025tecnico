<?php
/*
Arquivo: cadastro.php

Objetivo: receber os dados do form_cadastro.php e salvar no BD

Passos:
    - conferir se as senhas batem
    - verificar se o email já não está cadastrado
    - criptografar a senha
*/

# pegar os dados do form enviados via post:
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha');
$senha2 = filter_input(INPUT_POST, 'senha2');

# conferir se as senhas batem
if($senha != $senha2){
    header('Location:form_cadastro.php?msg='.urlencode('As senhas digitadas não são iguais.'));
    exit;
}

# verificar se o email já não está cadastrado
require 'conexao.php';
$u = $conn->query("SELECT id FROM usuario WHERE email='$email'");
if($u->rowCount() > 0){
    header('Location:form_cadastro.php?msg='.urlencode('Este usuário já está cadastrado.'));
    exit;
}

# criptografar a senha
# $hash = md5($senha); não se usa mais
$hash = password_hash($senha, PASSWORD_BCRYPT);
# salvar no banco de dados
$conn->query("INSERT INTO usuario (nome, email, senha) VALUES ('$nome','$email','$hash')");
# redirecionar
header('Location:login.php');
exit;