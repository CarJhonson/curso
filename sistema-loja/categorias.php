<?php
	//abaixo incluo o arquivo de conexão com o banco de dados
	require "includes/connection.php";

	$sql_categorias = "SELECT * FROM categoria;";
	$categorias = $conexao->query($sql_categorias);


	include "layout/header.php"; 
	include "layout/menu.php"; 
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Categorias</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])){ ?>
			<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12">
				<?php echo $_GET['msg']; ?>
			</div>
		<?php } ?>
		<div class="">
			<a href="nova-categoria.php" class="btn btn-primary">
				Nova categoria
			</a>
		</div>
		<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>ID</th>
				<th>Descrição</th>
				<th>Ações</th>
			</tr>

			<!-- linha de loop -->
			<?php while($categoria = $categorias->fetch_array(MYSQLI_ASSOC)) { ?>
				<tr>
					<td><?php echo $categoria['id']; ?></td>
					<td><?php echo $categoria['descricao']; ?></td>
					<td>
						<a href="editar-categoria.php?id=<?php echo $categoria['id']; ?>" class="btn btn-warning">
							<i class="fas fa-edit"></i>
						</a>
						<a href="deleta-categoria.php?id=<?php echo $categoria['id']; ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">
							<i class="fas fa-trash"></i>
						</a>
					</td>
				</tr>
			<?php } ?>
			<!-- fim da linha de loop -->
		</table>
	</div>
</div>

<?php include "layout/footer.php"; ?>