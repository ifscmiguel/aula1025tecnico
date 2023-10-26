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
<nav>
        <a href="index.php">Início</a>
        <a href="segura.php">Página segura</a>
        <a href="login.php">Login</a>
    </nav>
    <main>
        <h1>Login</h1>
        <form action="" method="post">
            <div>
                <label for="user">User</label>
                <input type="text" name="user" id="user">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <input type="submit" value="Verificar">
            </div>
        </form>
    </main>
</div>
    
</body>
</html>