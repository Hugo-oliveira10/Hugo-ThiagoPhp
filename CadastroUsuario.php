<?php require_once "Dao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    
    <!-- Formulário de cadastro -->
    <form action="processar_cadastro.php" method="post">
        <!-- Campo para inserir o nome -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>
        
        <!-- Campo para inserir o e-mail -->
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>
        
        <!-- Campo para inserir a senha -->
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>
        
        <!-- Botão para enviar o formulário -->
        <button type="submit">Concluir Cadastro</button>
    </form>
</body>
</html>
