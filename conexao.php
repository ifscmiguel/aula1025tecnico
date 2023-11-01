<?php
#conexao.php
try {
    $user = 'root';
    $pass = '';
    $db = 'projetologin';
    $conn = new PDO("mysql:host=localhost; dbname=$db", $user, $pass);
} catch (\PDOException $e) {
    file_put_contents("log.txt", $e->getMessage()."\n\n", FILE_APPEND | LOCK_EX);
    die("Erro ao conectar no banco de dados. Tente novamente mais tarde");
}
