<?php
// Definição dos parâmetros de conexão com o banco de dados
$servername = "localhost"; // Nome do servidor
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "myDB"; // Nome do banco de dados a ser utilizado

try {
    // Criação de uma nova conexão PDO com o MySQL
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    
    // Definição do modo de erro para lançar exceções em caso de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Mensagem exibida caso a conexão seja bem-sucedida
    echo "Conexão bem-sucedida";
} catch(PDOException $e) {
    // Captura de exceções caso ocorra algum erro na conexão
    echo "Conexão falhou: " . $e->getMessage();
}
?>
