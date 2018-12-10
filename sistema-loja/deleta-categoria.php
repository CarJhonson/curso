<?php 
require "includes/connection.php";

$id = $_GET['id'];

$sql_delete = "DELETE FROM categoria WHERE id = {$id}";

$conexao->query($sql_delete);

header("Location: categorias.php");
?>