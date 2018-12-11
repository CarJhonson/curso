<?php 
require "includes/connection.php";

$id 			= $_POST['id'];
$descricao		= $_POST['descricao'];


if($id != '') {
	$sql_cargo = "UPDATE cargo SET descricao = '{$descricao}'WHERE id = {$id};";
	$msg = "Cargo alterado com sucesso!";
} else {

	$sql_cargo = "INSERT INTO cargo (descricao) VALUES ('{$descricao}');";
	$msg = "Cargo salvo com sucesso!";
}

print_r($sql_cargo);

if($conexao->query($sql_cargo)) {
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o cargo!";
	$tipo_msg = "danger";
}

header("Location: cargos.php?msg=$msg&tipo_msg=$tipo_msg")
?>