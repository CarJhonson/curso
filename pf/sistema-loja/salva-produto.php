<?php 
	include 'layout/header.php';
	include 'layout/menu.php';
	require "includes/conexao.php";

	$id = $_POST['id'];
	$nome=$_POST['nome'];
	$valor=$_POST['valor'];
	$valor= str_replace('.', '', $valor);
	$valor= str_replace(',', '.',$valor);
	$estoque=$_POST['estoque'];
	$id_categoria=$_POST['id_categoria'];
	
	if($id !=''){
		$sql_insere_produto = "UPDATE produto SET nome = '{$nome}', valor = '{$valor}', estoque = '{$estoque}', id_categoria = '{$id_categoria}' WHERE id = {$id};";
		$msg = "Produto alterado com sucesso!";
	}else {
		$sql_insere_produto = "INSERT INTO produto (nome,valor,estoque,id_categoria) VALUES ('{$nome}','{$valor}','{$estoque}','{$id_categoria}');";
	}
	if($conexao->query($sql_insere_produto)){
	$msg = "Registro salvo com sucesso!";
	$tipo_msg = "success";
	}else{
	$msg = "Registro não salvo!";
	$tipo_msg = "danger";
	}



header("Location: produtos.php?msg={$msg}&&tipo_msg={$tipo_msg}");
?>