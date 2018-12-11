<?php 
require "includes/connection.php";

$id = $_GET['id'];

$sql_delete = "DELETE FROM funcionarios WHERE id = {$id}";

try {
	$conexao->query($sql_delete);
	$msg = "funcionario excluído com sucesso!";
	$tipo_msg = "success";
	header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
} catch (Exception $e) {
	$msg = "funcionario não excluído !";
	$tipo_msg = "danger";
	header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
}
?>