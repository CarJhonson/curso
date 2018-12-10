<?php 
	//$mysqli = new mysqli("localhost", "usuario", "senha", "database");
	//nesta linha realizo a conexão
	require "includes/connection.php";
	//nesta linha, monto a consulta a ser realizada
	$sql_produtos = "SELECT p.*, c.descricao as categoria 
					 FROM produto p
					 LEFT JOIN  categoria c ON c.id = p.id_categoria
					 ORDER BY p.id DESC";
	//nesta linha, executo a consulta montada
	$produtos = $conexao->query($sql_produtos);
?>

<?php include "layout/header.php"; ?>
<?php include "layout/menu.php"; ?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Produtos</h1>
	<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])) { ?>
		<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> esconde">
			<?php echo $_GET['msg']; ?>
		</div>
	<?php } ?>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Produtos</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<a href="novo-produto.php" class="btn btn-primary mb-2 float-right">Novo produto</a>
		</div>
	</div>
	<div class="row">
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>#</th>
				<th>Descrição</th>
				<th>Preço</th>
				<th>Estoque</th>
				<th>Categoria</th>
				<th>Ações</th>
			</tr>

			<?php 
			$total_estoque = 0;
			while($produto = $produtos->fetch_array(MYSQLI_ASSOC)) { //aqui eu starto o loop dos dados da consulta ?>
				<tr>
					<td><?php echo $produto['id']; ?></td>
					<td><?php echo $produto['nome']; ?></td>
					<td>R$ <?php echo number_format($produto['valor'], 2, ',','.'); ?></td>
					<td><?php echo $produto['estoque']; ?></td>
					<td><?php echo $produto['categoria'] ?></td>
					<td>
						<a href="novo-produto.php?id=<?php echo $produto['id']; ?>" class="btn btn-warning">
							<i class="fas fa-edit"></i>
						</a>
						<a href="exclui-produto.php?id=<?php echo $produto['id']; ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')">
							<i class="fas fa-trash"></i>
						</a>
					</td>
				</tr>

			<?php 
				$total_estoque += $produto['estoque'];
				} //aqui finalizo o loop dos dados 
			?>
			<tr class="table-info">
				<td colspan="3">Total geral em estoque</td>
				<td colspan="3"><strong><?php echo $total_estoque; ?></strong></td>
			</tr>

		</table>
		
		

	</div>

</div>

<?php include "layout/footer.php"; ?>