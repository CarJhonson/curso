<?php 
require "includes/conexao.php";

$id = $_GET['id'];
$sql_deletar = "DELETE FROM CATEGORIA WHERE id={$id};";

try{
	$conexao->query($sql_deletar);
	$msg = "Registro deletado com sucesso!";
	$tipo_msg = "success";
	header("Location: categorias.php?msg={$msg}&&tipo_msg={$tipo_msg}");
}catch (exception $e){
	$msg = "Registro não deletado!";
	$tipo_msg = "danger";
	header("Location: categorias.php?msg={$msg}&&tipo_msg={$tipo_msg}");
}

?>