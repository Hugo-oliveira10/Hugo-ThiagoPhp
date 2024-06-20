<?php
class Layout {
    // Método para incluir arquivos PHP
    public function inc($arquivo){
        if (file_exists($arquivo)) { // Verifica se o arquivo existe no sistema de arquivos
            include $arquivo; // Inclui o arquivo especificado
        } else {
            echo "Erro: O arquivo ".$arquivo." não foi encontrado."; // Mensagem de erro se o arquivo não existir
        }
    }

    // Método para renderizar uma página completa
    public function pagina($pagina){
        $this->inc("cabecalho.php"); // Inclui o cabeçalho da página
        if (file_exists($pagina.".php")) { // Verifica se o arquivo da página existe
            $this->inc($pagina.".php"); // Inclui o conteúdo específico da página
        } else {
            echo "Erro: O arquivo ".$pagina.".php não foi encontrado."; // Mensagem de erro se o arquivo da página não existir
        }
        $this->inc("navbar.php"); // Inclui a barra de navegação
        $this->inc("rodape.php"); // Inclui o rodapé da página    
    }
}
?>
