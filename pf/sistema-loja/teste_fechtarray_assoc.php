<?php 
include "layout/header.php";
include "includes/conexao.php";

$sql= "SELECT * FROM usuario;";
$usuario = $conexao->query($sql);
$user = $usuario->fetch_array();
//print_r($user);
echo $user['nome'];
?>

