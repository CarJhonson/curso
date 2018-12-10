<?php  

require "includes/connection.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nova_senha = md5($senha);

if($id == '') {
	$sql_usuario = "INSERT INTO usuario (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$nova_senha}')";
	$msg = "Usuário salvo com sucesso!";
} else {
	if($senha == '') {
		$sql_usuario = "UPDATE usuario SET nome = '{$nome}', email = '{$email}' WHERE id = {$id}";
	} else {
		$sql_usuario = "UPDATE usuario SET nome = '{$nome}', email = '{$email}', senha = '{$nova_senha}' WHERE id = {$id}";
	}
	$msg = "Usuário alterado com sucesso!";
}

if($conexao->query($sql_usuario)){
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível executar a solicitação!";
	$tipo_msg = "danger";
}

header("Location: usuarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
?>
