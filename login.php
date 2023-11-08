<?php
#login.php
# se já está logado, redireciona
session_start();
if (isset($_SESSION['nome'])) {
    header('Location:segura.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php require 'menu.php'; ?>
        <main>
            <?php
            $msg = filter_input(INPUT_GET, 'msg');
            if($msg){
                echo '<div class="erro">'.urldecode($msg).'</div>';
            }              
            ?>            
            <h1>Login</h1>
            <form action="verificar.php" method="post">
                <div>
                    <label for="user">User</label>
                    <input type="text" name="user" id="user" placeholder="Digite seu email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <div>
                    <input type="submit" value="Verificar">
                </div>
            </form>
            <p><a href="form_cadastro.php">Não tem uma conta? Cadastre-se aqui.</a></p>
        </main>
    </div>

    <script>
        let erro = document.querySelector(".erro");
        setTimeout(()=>{
            erro.style.display = 'none';
        }, 5000);
    </script>
</body>

</html>