<?php
require_once "Dao.php"; // Inclui o arquivo que contém a definição da classe Dao
$dao = new Dao(); // Cria uma nova instância da classe Dao
$dados = $dao->listar(); // Chama o método listar() da classe Dao para obter os dados dos usuários
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
                    <th scope="row"><?php echo $linha['id']; ?></th> <!-- Exibe o ID do usuário -->
                    <td><?php echo $linha['usuario']; ?></td> <!-- Exibe o nome de usuário -->
                    <td><?php echo $linha['senha']; ?></td> <!-- Exibe a senha do usuário -->
                    <td><a href="exibirUsuario.php?id=<?php echo $linha['id']; ?>">Ver Detalhes</a></td> <!-- Cria um link para exibir detalhes do usuário -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
