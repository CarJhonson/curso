<?php
require "includes/connection.php" ;

$id = $_GET['id'];

$sql_deleta_prod = "DELETE FROM produto WHERE id = {$id}";

try {
	
	$conexao->query($sql_deleta_prod);
	$msg = "Produto excluído com sucesso!";
	$tipo_msg = "success";

	header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}");

} catch (Exception $e) {
	$msg = "Não foi possível excluir! Erro: {$e->getMessage()}";
	$tipo_msg = "danger";

	header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}");
}

?>