<?php 
require "includes/connection.php";

$id 			= $_POST['id'];
$nome 			= $_POST['nome'];
$id_cargo	 	= $_POST['id_cargo'];
$cpf 			= $_POST['cpf'];
$dt_nascimento 	= $_POST['dt_nascimento'];
$matricula 		= $_POST['matricula'];
$telefone 		= $_POST['telefone'];
$email 			= $_POST['email'];
$sexo 			= $_POST['sexo'];
$dt_admissao 	= $_POST['dt_admissao'];


if($id != '') {
	$sql_funcionario = "UPDATE funcionarios SET nome = '{$nome}', id_cargo = '{$id_cargo}', cpf = '{$cpf}', dt_nascimento = '{$dt_nascimento}', telefone = '{$telefone}', email = '{$email}', sexo = '{$sexo}', dt_admissao = '{$dt_admissao}' WHERE id = {$id};";
	$msg = "Funcionário alterado com sucesso!";
} else {

	$sql_funcionario = "INSERT INTO funcionarios (nome, id_cargo, cpf, matricula, dt_nascimento, telefone, email, sexo, dt_admissao)
						VALUES ('{$nome}', '{$id_cargo}', '{$cpf}','{$matricula}',' {$dt_nascimento}','{$telefone}','{$email}','{$sexo}','{$dt_admissao}');";
	$msg = "Funcionário salvo com sucesso!";
}

print_r($sql_funcionario);
if($conexao->query($sql_funcionario)) {
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o Funcionário!";
	$tipo_msg = "danger";
}

header("Location: funcionarios.php?msg=$msg&tipo_msg=$tipo_msg")
?>