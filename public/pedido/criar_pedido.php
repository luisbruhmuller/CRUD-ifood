<?php

include "../../infra/conexao.php";

$cliente_id = $_POST["cliente_id"];
$restaurante_id = $_POST["restaurante_id"];
$valor = $_POST["valor"];
$status = $_POST["status"];

$sql = "INSERT INTO pedidos (cliente_id,restaurante_id,data_pedido,valor,status) VALUES ('$cliente_id','$restaurante_id',NOW(),'$valor','$status')";

mysqli_query($conexao, $sql);

header("Location: ../../index.php");
?>