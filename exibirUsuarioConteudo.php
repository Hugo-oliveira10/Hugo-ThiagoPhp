<?php 
include "Dao.php";

// $id=$_GET['id'];
$id=8;
$dao = new Dao();
$dados = $dao->exibirUsuario($id);
$linha = $dados->fetch();

?>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dados do usuário</h5>
    <p class="card-text">
      Usuário:<?php echo $linha["nome"];?><br>
      Senha: <?php echo $linha["senha"];?><br>
    </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>