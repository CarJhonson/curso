<?php 
require "includes/connection.php";

$id = $_GET['id'];

$sql_delete_user = "DELETE FROM usuario WHERE id = {$id}";

try {
	$conexao->query($sql_delete_user);
	$msg = "Usuário excluído com sucesso!";
	$tipo_msg = "success";
	header("Location: usuarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
} catch (Exception $e) {
	$msg = "Usuário excluído com sucesso!";
	$tipo_msg = "success";
	header("Location: usuarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
}

?>