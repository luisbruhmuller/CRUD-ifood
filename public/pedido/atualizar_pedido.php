<?php

include "../../infra/conexao.php";

$preco = $_POST["preco"];
$restaurante_id = $_POST["restaurante_id"];
$cliente_id = $_POST["cliente_id"];
$cliente_nome = $_POST["nome"];
$sql = "UPDATE pedidos SET restaurante_id='$restaurante_id', cliente_id='$cliente_id', preco='$preco', cliente_nome='$cliente_nome' WHERE id = '$id'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");