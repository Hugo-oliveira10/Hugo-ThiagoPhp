<?php 
require_once "Dao.php";

// Instancia um objeto Dao para interagir com o banco de dados
$dao = new Dao();

// Obtém o parâmetro 'id' da URL (através do método GET)
$id = $_GET['id'];

// Chama o método 'exibirUsuario' da classe Dao para buscar os dados do usuário pelo ID
$dados = $dao->exibirUsuario($id);
?>

<div class="container">
    <!-- Tabela responsiva com listagem de usuários -->
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
                <!-- Loop para exibir cada linha de dados do usuário -->
                <tr>
                    <th scope="row"><?php echo $linha['id']; ?></th>
                    <td><?php echo $linha['usuario']; ?></td>
                    <td><?php echo $linha['senha']; ?></td>
                    <td><a href="exibirUsuarioConteudo.php?id=<?php echo $linha['id']; ?>">Ver Detalhes</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
