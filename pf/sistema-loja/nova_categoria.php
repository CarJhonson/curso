<?php 
include "layout/header.php";

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
			    <li class="breadcrumb-item active" aria-current="nova_categoria.php">Nova Categoria</li>
			  </ol>	 
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form method="post" action="salvar_categoria.php">
				<div class="form-group">
					<label for="descricao">Descrição:</label>
					<input type="text" name="descricao" id="descricao" class="form-control" required="">
				</div>
				<button class="btn btn-success" type="submit">Salvar</button>
			</form>
		</div>
	</div>
</div>

<?php 
include "layout/footer.php";
?>