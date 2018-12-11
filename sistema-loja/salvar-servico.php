<?php 
require "includes/connection.php";

$id 			= $_POST['id'];
$descricao		= $_POST['descricao'];
$valor		 	= $_POST['valor'];
$id_categoria 	= $_POST['id_categoria'];
$id_funcionario	= $_POST['id_funcionario'];
$dt_inicio 		= $_POST['dt_inicio'];
$dt_fim			= $_POST['dt_fim'];
$status			= $_POST['status'];

print_r($id);
if($id != '') {
	$sql_servico = "UPDATE servicos SET descricao = '{$descricao}', valor = '{$valor}', id_categoria = '{$id_categoria}', id_funcionario = '{$id_funcionario}', dt_inicio = '{$dt_inicio}', dt_fim = '{$dt_fim}', status = '{$status}' WHERE id = {$id};";
	$msg = "Serviço alterado com sucesso!";
} else {
	
	$sql_servico = "INSERT INTO servicos (descricao, valor, id_categoria, id_funcionario, dt_inicio, dt_fim, status)
						VALUES ('{$descricao}', '{$valor}', '{$id_categoria}','{$id_funcionario}',' {$dt_inicio}','{$dt_fim}','{$status}');";
	$msg = "Serviço salvo com sucesso!";
	//print_r($sql_servico);
}


if($conexao->query($sql_servico)) {
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o Serviço!";
	$tipo_msg = "danger";
}

//header("Location: servicos.php?msg=$msg&tipo_msg=$tipo_msg")
?>