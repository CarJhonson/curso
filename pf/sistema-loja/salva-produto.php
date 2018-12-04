<?php 
	include 'layout/header.php';
	include 'layout/menu.php';
	require "includes/conexao.php";

	$nome=$_POST['nome'];
	$valor=$_POST['valor'];
	$valor= str_replace('.', '', $valor);
	$valor= str_replace(',', '.',$valor);
	$estoque=$_POST['estoque'];
	$id_categoria=$_POST['id_categoria'];
	$sql_insere_produto = "INSERT INTO produto (nome,valor,estoque,id_categoria) VALUES ('{$nome}','{$valor}','{$estoque}','{$id_categoria}');";
	//print_r($sql_insere_produto);
	if($conexao->query($sql_insere_produto)){
	$msg = "Registro salvo com sucesso!";
	$tipo_msg = "success";
	}else{
	$msg = "Registro não salvo!";
	$tipo_msg = "danger";
	}



header("Location: produtos.php?msg={$msg}&&tipo_msg={$tipo_msg}");
?>