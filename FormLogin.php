<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Login</h2>
    <form action="verificarLogin.php" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>
        
        <button type="submit">Entrar</button>
        <a href="CadastroUsuario.php">
            <button type="button">Cadastre-se</button>
        </a>
    </form>
</body>
</html>
