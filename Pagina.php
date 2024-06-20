<?php
require_once "Layout.php"; // Inclui o arquivo da classe Layout

$layout = new Layout(); // Cria uma nova instância da classe Layout

// Inclui diferentes partes da página usando o objeto $layout
$layout->inc("cabecalho.php"); // Inclui o cabeçalho da página
$layout->inc("conteudo.php");  // Inclui o conteúdo principal da página
$layout->inc("navbar.php");    // Inclui a barra de navegação da página
$layout->inc("rodape.php");    // Inclui o rodapé da página
?>
