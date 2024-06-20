<?php require_once "Dao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define o conjunto de caracteres UTF-8 para suportar caracteres especiais -->
    <meta charset="UTF-8">
    
    <!-- Configura a escala inicial para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título da página exibido na aba do navegador -->
    <title>Cadastro de Usuário</title>
</head>
<body>
    <!-- Título da seção de cadastro -->
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
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
