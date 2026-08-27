<?php

include "../../infra/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereço"];

$sql = "INSERT INTO clientes (nome,email,telefone,endereco) VALUES ('$nome','$email','$telefone','$endereco')";

mysqli_query($conexao, $sql);

header("Location: ../../index.php");
?>