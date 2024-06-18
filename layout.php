<?php

class Layout {
    public function inc($arquivo){
        if (file_exists($arquivo)) {
            include $arquivo;
        } else {
            echo "Erro: O arquivo ".$arquivo." não foi encontrado.";
        }
    }

    public function pagina($pagina){
        $this->inc("cabecalho.php");
        if (file_exists($pagina.".php")) {
            $this->inc($pagina.".php");
        } else {
            echo "Erro: O arquivo ".$pagina.".php não foi encontrado.";
        }
        $this->inc("navbar.php");
        $this->inc("rodape.php");    
    }
}
