<?php
class Dao {
    private $dsn = "mysql:host=localhost;dbname=exemplo";
    private $username = "root";
    private $password = "";
    private $pdo;

    public function __construct() {
        try {
            // Inicializa uma nova conexão PDO com o banco de dados
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            // Define o modo de erro para exceções
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Captura qualquer exceção ocorrida na tentativa de conexão
            echo "Erro na conexão: " . $e->getMessage();
        }
    }

    public function insertLogin($usuario, $senha, $email) {
        try {
            // Prepara a consulta SQL para inserir um novo login na tabela 'login'
            $stmt = $this->pdo->prepare("INSERT INTO login (usuario, senha, email) VALUES (:usuario, :senha, :email)");
            // Substitui os parâmetros da consulta pelos valores recebidos
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':email', $email);
            // Executa a consulta preparada
            $stmt->execute();
        } catch (PDOException $ex) {
            // Captura e exibe qualquer exceção ocorrida durante a inserção
            echo "Erro ao inserir: " . $ex->getMessage();
        }
    }

    public function listar() {
        try {
            // Executa uma consulta SQL simples para listar todos os registros da tabela 'login'
            $stmt = $this->pdo->query("SELECT * FROM login");
            return $stmt; // Retorna o resultado da consulta
        } catch (PDOException $ex) {
            // Captura e exibe qualquer exceção ocorrida durante a listagem
            echo "Erro ao listar: " . $ex->getMessage();
        }
    }

    public function exibirUsuario($id) {
        try {
            // Prepara a consulta SQL para buscar um usuário específico pelo ID
            $stmt = $this->pdo->prepare("SELECT * FROM login WHERE id = :id");
            // Substitui o parâmetro da consulta pelo valor recebido
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            // Executa a consulta preparada
            $stmt->execute();
            return $stmt; // Retorna o resultado da consulta
        } catch (PDOException $ex) {
            // Captura e exibe qualquer exceção ocorrida ao tentar exibir um usuário
            echo "Erro ao exibir usuário: " . $ex->getMessage();
        }
    }

    public function verificaLogin($usuario, $senha) {
        try {
            // Prepara a consulta SQL para verificar se o login é válido
            $stmt = $this->pdo->prepare("SELECT * FROM login WHERE usuario = :usuario AND senha = :senha");
            // Substitui os parâmetros da consulta pelos valores recebidos
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':senha', $senha);
            // Executa a consulta preparada
            $stmt->execute();
            if ($stmt->fetch()) {
                // Redireciona para 'painel.php' se o login for válido
                header("Location: painel.php");
            } else {
                // Redireciona para 'index.php' se o login não for válido
                header("Location: index.php");
            }
        } catch (PDOException $ex) {
            // Captura e exibe qualquer exceção ocorrida durante a verificação do login
            echo "Erro ao verificar login: " . $ex->getMessage();
        }
    }
}
?>
