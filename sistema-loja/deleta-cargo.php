<?php 
require "includes/connection.php";

$id = $_GET['id'];

$sql_delete = "DELETE FROM cargo WHERE id = {$id}";

try {
	$conexao->query($sql_delete);
	$msg = "cargo excluído com sucesso!";
	$tipo_msg = "success";
	header("Location: cargos.php?msg={$msg}&tipo_msg={$tipo_msg}");
} catch (Exception $e) {
	$msg = "cargo não excluído !";
	$tipo_msg = "danger";
	header("Location: cargos.php?msg={$msg}&tipo_msg={$tipo_msg}");
}
?>