<?php

include "infra/conexao.php";



$pedidos = mysqli_query($conexao, "SELECT * FROM pedidos");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Ifood</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Ifood</h1>
    </header>
    <main>
        <h2>Adicione um novo pedido</h2>
        <form action="public/pedido/criar_pedido.php" method="POST">

            <br>
            <label for="valor">Preço:</label>
            <input type="number" name="valor" step="0.01" min="0.01" required>
            <br>
            <label for="status">Status:</label>
            <select name="status">
                <option value="Pendente">Pendente</option>
                <option value="Em andamento">Em andamento</option>
                <option value="Concluído">Concluído</option>
            </select>
            <br>
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id">
                <?php
                $cliente = mysqli_query($conexao, "SELECT * FROM clientes");
                while ($clientes = mysqli_fetch_assoc($cliente)) {
                    echo "<option value='" . $clientes['id'] . "'>" . $clientes['nome'] . "</option>";
                }
                ?>
            </select>
            <br>
            <label for="restaurante_id">Restaurante:</label>
            <select name="restaurante_id">
                <?php
                $restaurante = mysqli_query($conexao, "SELECT * FROM restaurantes");
                while ($restaurantes = mysqli_fetch_assoc($restaurante)) {
                    echo "<option value='" . $restaurantes['id'] . "'>" . $restaurantes['nome'] . "</option>";
                }
                ?>
            </select>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <h2>Adicione um novo cliente!</h2>
        <form action="public/cliente/criar_cliente.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email">
            <br>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone">
            <br>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        </form>
        <h2>Adicione um novo restaurante!</h2>
        <form action="public/restaurante/criar_restaurante.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria">
            <br>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone">
            <br>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <h2>listar por usuario</h2>
        <form action="public/listar_dono.php" method="POST">
            <label for="id">Usuário:</label>
            <select name="id">
                <?php
                $clientes = mysqli_query($conexao, "SELECT * FROM clientes");
                while ($cliente = mysqli_fetch_assoc($clientes)) {
                    echo "<option value='" . $cliente['id'] . "'>" . $cliente['nome'] . "</option>";
                }
                ?>
            </select>
            <br>
            <button type="submit">Listar</button>
            <div>
                <h2>Pedidos Cadastrados</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Restaurante</th>
                        <th>Data do Pedido</th>
                        <th>Valor</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                    <?php while ($pedido = mysqli_fetch_assoc($pedidos)) { ?>
                        <tr>
                            <td><?php echo $pedido["id"] ?></td>
                            <td><?php echo $pedido["cliente_id"] ?></td>
                            <td><?php echo $pedido["restaurante_id"] ?></td>
                            <td><?php echo $pedido["data_pedido"] ?></td>
                            <td><?php echo $pedido["valor"] ?></td>
                            <td><?php echo $pedido["status"] ?></td>
                            <td>
                                <a href="public/pedido/editar_pedido.php?id=<?php echo $pedido["id"] ?>">Editar</a>
                                <a href="public/pedido/excluir_pedido.php?id=<?php echo $pedido["id"] ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <div>
                    <h2>Clientes Cadastrados</h2>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>email</th>
                            <th>telefone</th>
                            <th>endereco</th>

                        </tr>
                        <?php
                        $cliente = mysqli_query($conexao, "SELECT * FROM clientes");
                        while ($clientes = mysqli_fetch_assoc($cliente)) {
                            ?>
                            <tr>
                                <td><?php echo $clientes["id"] ?></td>
                                <td><?php echo $clientes["nome"] ?></td>
                                <td><?php echo $clientes["email"] ?></td>
                                <td><?php echo $clientes["telefone"] ?></td>
                                <td><?php echo $clientes["endereco"] ?></td>
                                <td>
                                    <a href="public/pedido/editar_pedido.php?id=<?php echo $pedido["id"] ?>">Editar</a>
                                    <a href="public/pedido/excluir_pedido.php?id=<?php echo $pedido["id"] ?>">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                    <div>

    </main>
    <footer>
    </footer>


</body>

</html>