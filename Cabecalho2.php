<?php

class Layout {
    // Método para incluir arquivos PHP
    public function inc($arquivo){
        if (file_exists($arquivo)) {
            include $arquivo;
        } else {
            echo "Erro: O arquivo ".$arquivo." não foi encontrado.";
        }
    }

    // Método para carregar uma página completa com cabeçalho, conteúdo, navbar e rodapé
    public function pagina($pagina){
        // Inclui o cabeçalho padrão da página
        $this->inc("cabecalho.php");
        
        // Verifica se o arquivo da página existe e o inclui
        if (file_exists($pagina.".php")) {
            $this->inc($pagina.".php");
        } else {
            echo "Erro: O arquivo ".$pagina.".php não foi encontrado.";
        }
        
        // Inclui a barra de navegação padrão da página
        $this->inc("navbar.php");
        
        // Inclui o rodapé padrão da página
        $this->inc("rodape.php");    
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Define o conjunto de caracteres UTF-8 para suportar caracteres especiais -->
    <meta charset="utf-8">
    
    <!-- Configura a escala inicial para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Título da página exibido na aba do navegador -->
    <title>Hand Academy</title>
    
    <!-- Importa o arquivo CSS do Bootstrap 5.3.3 para estilizar a página -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
