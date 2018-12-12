<?php 
require "includes/connection.php";

$id = $_GET['id'];

$sql_delete = "DELETE FROM servicos WHERE id = {$id}";

try {
	$conexao->query($sql_delete);
	$msg = "Serviço excluído com sucesso!";
	$tipo_msg = "success";
	header("Location: servicos.php?msg={$msg}&tipo_msg={$tipo_msg}");
} catch (Exception $e) {
	$msg = "Serviço não excluído !";
	$tipo_msg = "danger";
	header("Location: servicos.php?msg={$msg}&tipo_msg={$tipo_msg}");
}
?>