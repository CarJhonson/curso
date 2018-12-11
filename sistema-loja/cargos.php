<?php 
include "layout/header.php";
include "layout/menu.php";
include "includes/connection.php";

$sql_cargos = "SELECT * FROM cargo";
$cargos = $conexao->query($sql_cargos);

?>

<div class="container">
<p>&nbsp;</p>
	<h1>Cargos</h1> <!-- Início bloco de comando para mostrar os links de acesso as outras paginas "migalhas de pão" -->
	
		<div class="row">
			<div class="col">
				<nav aria-label="breadcrumb">
			  		<ol class="breadcrumb">
			    		<li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Cargos</li>
			  		</ol>
				</nav>
			</div>
		</div> <!-- Fim bloco de comando para mostrar os links de acesso as outras paginas "migalhas de pão" -->

		<div class="row"> <!-- início bloco de comando para mostrar mensagem de erro ou sucesso ao salvar no bd-->
		<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])){ ?>
			<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12">
				<?php echo $_GET['msg']; ?>
			</div> 
		<?php } ?> <!-- fim bloco de comando para mostrar mensagem de erro ou sucesso ao salvar no bd-->

		<div class="">
			<a href="novo-cargo.php" class="btn btn-primary">
				Novo Cargo
			</a>
		</div>
		<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>ID</th>
				<th>Descricão</th>				
				<th>ações</th>				
			</tr>
			<!-- linha de loop -->
			<?php while($cargo = $cargos->fetch_array(MYSQLI_ASSOC)) { ?> <!-- fetch_array extrai dados de apenas um funcioanrio de todos que estão armazenados na variavel funcionários-->
				<tr>
					<td><?php echo $cargo['id']; ?></td>
					<td><?php echo $cargo['descricao']; ?></td>
					<td>
						<a href="novo-cargo.php?id=<?php echo $cargo['id']; ?>" class="btn btn-warning">
							<i class="fas fa-edit"></i>
						</a>
						<a href="deleta-cargo.php?id=<?php echo $cargo['id']; ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">
							<i class="fas fa-trash"></i>
						</a>
					</td>
				</tr>
			<?php } ?>
			<!-- fim da linha de loop -->
	</div>

<?php 
include "layout/footer.php"
?>