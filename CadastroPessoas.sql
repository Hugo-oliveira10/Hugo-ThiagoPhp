CREATE DATABASE IF NOT EXISTS HandAcademy;
USE HandAcademy;
CREATE TABLE IF NOT EXISTS Pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
-- Dados de exemplo
INSERT INTO Pessoas (nome, email, senha) VALUES
('João', 'joao@example.com', 'senha123'),
('Maria', 'maria@example.com', 'senha456'),
('Pedro', 'pedro@example.com', 'senha789'),
('Ana', 'ana@example.com', 'senha101112'),
('Lucas', 'lucas@example.com', 'senha131415');

-- Banco de Dados para os Treinos dos Alunos
CREATE DATABASE IF NOT EXISTS TreinoAlunos;
USE TreinoAlunos;
CREATE TABLE IF NOT EXISTS Treinos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pessoa_id INT,
    nome_aluno VARCHAR(100) NOT NULL,
    parte_corpo VARCHAR(100) NOT NULL,
    exercicio VARCHAR(100) NOT NULL,
    series INT NOT NULL,
    repeticoes INT NOT NULL
);
-- Dados de exemplo
INSERT INTO Treinos (pessoa_id, nome_aluno, parte_corpo, exercicio, series, repeticoes) VALUES
(1, 'João', 'Peito', 'Supino Reto', 4, 10),
(1, 'João', 'Costas', 'Barra Fixa', 4, 10),
(2, 'Maria', 'Pernas', 'Agachamento', 4, 12),
(3, 'Pedro', 'Braços', 'Rosca Direta', 4, 12),
(4, 'Ana', 'Ombros', 'Desenvolvimento', 4, 12),
(5, 'Lucas', 'Abdômen', 'Prancha', 3, 30);

-- Banco de Dados para Cadastrar os Treinos
CREATE DATABASE IF NOT EXISTS CadastrarTreinos;
USE CadastrarTreinos;
CREATE TABLE IF NOT EXISTS CadastrarTreino (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_aluno VARCHAR(100) NOT NULL,
    parte_corpo VARCHAR(100) NOT NULL,
    exercicio VARCHAR(100) NOT NULL,
    series INT NOT NULL,
    repeticoes INT NOT NULL
);
-- Dados de exemplo
INSERT INTO CadastrarTreino (nome_aluno, parte_corpo, exercicio, series, repeticoes) VALUES
('João', 'Pernas', 'Agachamento', 4, 12),
('Maria', 'Braços', 'Rosca Direta', 4, 12),
('Pedro', 'Peito', 'Supino Reto', 4, 10),
('Ana', 'Costas', 'Barra Fixa', 4, 10),
('Lucas', 'Ombros', 'Desenvolvimento', 4, 12);