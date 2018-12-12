<?php 
require "includes/connection.php";

$id = $_GET['id'];

$sql_delete = "DELETE FROM categoria WHERE id = {$id}";

try {
	$conexao->query($sql_delete);
	$msg = "Categoria excluído com sucesso!";
	$tipo_msg = "success";
	header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
} catch (Exception $e) {
	$msg = "Categorai não excluído !";
	$tipo_msg = "danger";
	header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
}
?>