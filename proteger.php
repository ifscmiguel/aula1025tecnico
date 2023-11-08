<?php
require 'conexao.php';
session_start();
# se pediu para proteger e não está logado
if( isset($protegido) && $protegido && !isset($_SESSION['nome'])){
    header('Location:login.php?tipo=erro&msg=' . urlencode("Você não tem permissão para acessar esta página!"));
    exit;
}
# se está logado
if(isset($_SESSION['nome'])){
    $logado = true;
}