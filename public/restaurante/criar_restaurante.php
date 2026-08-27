<?php

include "../../infra/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereço"];

$sql = "INSERT INTO restaurantes (nome,categoria,telefone,endereco) VALUES ('$nome','$categoria','$telefone','$endereco')";

mysqli_query($conexao, $sql);

header("Location: ../../index.php");
?>