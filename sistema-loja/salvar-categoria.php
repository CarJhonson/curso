<?php 
require "includes/connection.php"; //incluindo conexão

$descricao = $_POST['descricao']; //recebendo variável

$sql_insere_categoria = "INSERT INTO categoria (descricao) VALUES ('{$descricao}')";

$conexao->query($sql_insere_categoria);

header("Location: categorias.php");

?>