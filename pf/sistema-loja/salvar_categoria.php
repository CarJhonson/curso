<?php 
include "layout/header.php";
require "includes/conexao.php";
$descricao=$_POST['descricao'];

$sql_insere_categoria = "INSERT INTO categoria (descricao) VALUES ('{$descricao}')";

if($conexao->query($sql_insere_categoria)){
	$msg = "Registro salvo com sucesso!";
	$tipo_msg = "success";
}else{
	$msg = "Registro não salvo!";
	$tipo_msg = "danger";
}
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Categorias</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
			    <li class="breadcrumb-item"><a href="categorias.php">Categorias</a></li>
			    <li class="breadcrumb-item"><a href="nova_categoria.php">Nova Categoria</a></li>
			    <li class="breadcrumb-item active" aria-current="salvar_categoria.php">Salvar Categoria</li>
			  </ol>	 
			</nav>
		</div>
	</div>
</div>

<?php 
include "layout/footer.php";
header("Location: categorias.php?msg={$msg}&&tipo_msg={$tipo_msg}");
?>