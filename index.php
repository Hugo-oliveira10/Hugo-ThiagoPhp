<?php

include "conteudo.php";
include "rodape.php";
include "cabecalho.php";
include "exibirUsuario.php";
include "layout.php";
include "Lista_usuarios.php";
include "Pagina.php";
include "PaginaInicial.php";

if(isset($_GET['erro'])){
    if($_GET['erro']==1){
        echo "Usuario ou senha invalida";
    }
}

include "rodape.php";

