<?php
require_once "Dao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dao = new Dao();
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $dao->verificaLogin($usuario, $senha);
}
?>