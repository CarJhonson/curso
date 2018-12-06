<?php 
	include 'layout/header.php';
	include 'layout/menu.php';
	require "includes/conexao.php";

	$id = $_POST['id'];
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
		
	if($id !=''){
		$sql_insere_usuario = "UPDATE usuario SET nome = '{$nome}', email = '{$email}', senha = '{$senha}' WHERE id = {$id};";
		$msg = "Usuario alterado com sucesso!";
	}else {
		$sql_insere_usuario = "INSERT INTO usuario (nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}');";
	}
	if($conexao->query($sql_insere_usuario)){
	$msg = "Registro salvo com sucesso!";
	$tipo_msg = "success";
	}else{
	$msg = "Registro não salvo!";
	$tipo_msg = "danger";
	}

//print_r($sql_insere_usuario);
header("Location: usuarios.php?msg={$msg}&&tipo_msg={$tipo_msg}");
?>