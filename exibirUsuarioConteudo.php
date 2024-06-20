<?php 
require_once "Layout.php"; // Inclui o arquivo que contém a definição da classe Layout

$layout = new Layout(); // Instancia um objeto da classe Layout

// Inclui os diferentes componentes da página usando o método 'inc' do objeto $layout
$layout->inc("cabecalho.php"); // Inclui o cabeçalho da página (arquivo cabecalho.php)
$layout->inc("ExibirUsuario.php"); // Inclui a parte de exibição de usuário (arquivo ExibirUsuario.php)
$layout->inc("navbar.php"); // Inclui a barra de navegação (arquivo navbar.php)
$layout->inc("rodape.php"); // Inclui o rodapé da página (arquivo rodape.php)
?>
