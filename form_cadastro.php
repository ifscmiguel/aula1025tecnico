<?php
$protegido = false; # página não protegida
require 'proteger.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
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
            <h1>Cadastro de usuário</h1>
            <form action="cadastro.php" method="post">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <div>
                    <label for="senha2">Confirme a Senha:</label>
                    <input type="password" name="senha2" id="senha2" required>
                </div>
                <div>
                    <input type="submit" value="Salvar">
                </div>
            </form>
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