<?php

include "../../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM pedidos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$pedidos =mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Restaurante</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - restaurante</h1>
    </header>
    <main>
        <h2>Editando o pedido <?php echo $pedidos["id"]?>!</h2>
        <form action="public/pedido/atualizar_pedido.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $pedidos["id"]?>">

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
            <button type="submit">editar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>