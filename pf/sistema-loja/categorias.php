<?php 
	//$mysqli = new mysqli("localhost", "usuario", "senha", "database");
	//nesta linha realizo a conexão
	include "includes/conexao.php";
	//nesta linha, monto a consulta a ser realizada
	$sql_categorias = "SELECT id, descricao FROM categoria;";
	//nesta linha, executo a consulta montada
	$categorias = $conexao->query($sql_categorias);
?>

<?php include "layout/header.php"; ?>
<?php include "layout/menu.php"; ?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Categorias</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
			    <li class="breadcrumb-item active" aria-current="Categorias.php">Categorias</li>
			  </ol>	 
			</nav>
		</div>
	</div>
	<div class="row">
		<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])){ ?>
			<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12">
				<?php echo $_GET['msg']; ?>
			</div>
		<?php }?>
		<a href="nova_categoria.php" class="btn btn-primary"> Nova Categoria </a>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th text-align="center">Id</th>
				<th>Descrição</th>
				<th>Ações</th>				
			</tr>

			<?php while($dados = $categorias->fetch_array(MYSQLI_ASSOC)) { //aqui eu starto o loop dos dados da consulta ?>
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['descricao']; ?></td>
					<td>
						<a href="deleta-categoria.php?id=<?php echo $dados['id']?>" class="btn btn-danger" title="Excluir" onclick = "return confirm('Deletar?')">
							<i class="far fa-trash-alt"></i>
						</a>
						<a href="editar_categoria.php?id=<?php echo$dados['id']?>" class="btn btn-warning" title="Editar">
							<i class="fas fa-edit"></i>
						</a>
					</td>
				</tr>
			<?php } //aqui finalizo o loop dos dados ?>

		</table>
	</div>

</div>

<?php include "layout/footer.php"; ?>