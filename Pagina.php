<?php

$dsn;
$username;
$password;
$conecxao = new PDO($dsn, $username, $password);
$stmt = $conexao->query("SELECT * FROM Alunos");
while ($linha = $stmt->fetch()) {
    echo "ID: " . $linha['id'] . ", Nome: " . $linha['nome'] . "<br>";

    echo "Erro: " . $e->getMessage();
};