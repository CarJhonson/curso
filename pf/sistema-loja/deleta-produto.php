<?php 
require "includes/conexao.php";

$id = $_GET['id'];
$sql_deletar = "DELETE FROM PRODUTO WHERE id={$id};";

if($conexao->query($sql_deletar)){
	$msg = "Registro deletado com sucesso!";
	$tipo_msg = "success";
}else{
	$msg = "Registro não deletado!";
	$tipo_msg = "danger";
}

header("Location: produtos.php?msg={$msg}&&tipo_msg={$tipo_msg}");
?>