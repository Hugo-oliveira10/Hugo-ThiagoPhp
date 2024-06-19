<?php
require_once "Dao.php";
$dao = new Dao();
$dados = $dao->listar();
?>

<div class="container mt-3">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuário</th>
                <th scope="col">Senha</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($linha = $dados->fetch()) { ?>
                <tr>
                    <th scope="row"><?php echo $linha['id']; ?></th>
                    <td><?php echo $linha['usuario']; ?></td>
                    <td><?php echo $linha['senha']; ?></td>
                    <td><a href="exibirUsuario.php?id=<?php echo $linha['id']; ?>">Ver Detalhes</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
