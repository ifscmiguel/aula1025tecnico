<?php
#conexao.php
try {
    $userdb = 'root';
    $passdb = '';
    $db = 'projetologin';
    $conn = new PDO("mysql:host=localhost; dbname=$db", $userdb, $passdb);
} catch (\PDOException $e) {
    file_put_contents("log.txt", $e->getMessage()."\n\n", FILE_APPEND | LOCK_EX);
    die("Erro ao conectar no banco de dados. Tente novamente mais tarde");
}
