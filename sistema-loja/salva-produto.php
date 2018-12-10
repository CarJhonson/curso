<?php 
require "includes/connection.php";

$id 			= $_POST['id'];
$nome 			= $_POST['nome'];
$estoque	 	= $_POST['estoque'];
$valor 			= $_POST['valor'];
$id_categoria 	= $_POST['id_categoria'];

$valor = str_replace('.', '', $valor);
$valor = str_replace(',', '.', $valor);

if($id != '') {
	$sql_produto = "UPDATE produto SET nome = '{$nome}', valor = '{$valor}', estoque = '{$estoque}', id_categoria = '{$id_categoria}' WHERE id = {$id};";
	$msg = "Produto alterado com sucesso!";
} else {

	$sql_produto = "INSERT INTO produto (nome, estoque, valor, id_categoria)
						VALUES ('{$nome}', '{$estoque}', '{$valor}', '{$id_categoria}');";
	$msg = "Produto salvo com sucesso!";
}


if($conexao->query($sql_produto)) {
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o produto!";
	$tipo_msg = "danger";
}

header("Location: produtos.php?msg=$msg&tipo_msg=$tipo_msg")
?>