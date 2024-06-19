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

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hand Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>