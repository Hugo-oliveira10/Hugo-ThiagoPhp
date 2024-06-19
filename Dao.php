<?php
class Dao {
    private $dsn = "mysql:host=localhost;dbname=exemplo";
    private $username = "root";
    private $password = "";
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }

    public function insertLogin($usuario, $senha, $email) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO login (usuario, senha, email) VALUES (:usuario, :senha, :email)");
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo "Erro ao inserir: " . $ex->getMessage();
        }
    }

    public function listar() {
        try {
            $stmt = $this->pdo->query("SELECT * FROM login");
            return $stmt;
        } catch (PDOException $ex) {
            echo "Erro ao listar: " . $ex->getMessage();
        }
    }

    public function exibirUsuario($id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM login WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $ex) {
            echo "Erro ao exibir usuário: " . $ex->getMessage();
        }
    }

    public function verificaLogin($usuario, $senha) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM login WHERE usuario = :usuario AND senha = :senha");
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            if ($stmt->fetch()) {
                header("Location: painel.php");
            } else {
                header("Location: index.php");
            }
        } catch (PDOException $ex) {
            echo "Erro ao verificar login: " . $ex->getMessage();
        }
    }
}
?>
