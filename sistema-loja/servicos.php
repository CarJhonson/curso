<?php 
include "layout/header.php";
include "layout/menu.php";
include "includes/connection.php";

$sql_servicos = "SELECT * FROM servicos";
$servicos = $conexao->query($sql_servicos);

?>

<div class="container">
<p>&nbsp;</p>
	<h1>Serviços</h1> <!-- Início bloco de comando para mostrar os links de acesso as outras paginas "migalhas de pão" -->
	
		<div class="row">
			<div class="col">
				<nav aria-label="breadcrumb">
			  		<ol class="breadcrumb">
			    		<li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Serviços</li>
			  		</ol>
				</nav>
			</div>
		</div> <!-- Fim bloco de comando para mostrar os links de acesso as outras paginas "migalhas de pão" -->

		<div class="row"> <!-- início bloco de comando para mostrar mensagem de erro ou sucesso ao salvar no bd-->
		<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])){ ?>
			<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12 esconde">
				<?php echo $_GET['msg']; ?>
			</div> 
		<?php } ?> <!-- fim bloco de comando para mostrar mensagem de erro ou sucesso ao salvar no bd-->

		<div class="">
			<a href="novo-servico.php" class="btn btn-primary">
				Novo Serviço
			</a>
		</div>
		<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>ID</th>
				<th>Descrição</th>
				<th>Valor</th>
				<th>Categoria</th>
				<th>Funcionario</th>
				<th>data inicial</th>
				<th>Data final</th>
				<th>Status</th>				
				<th>ações</th>				
			</tr>
			<!-- linha de loop -->
			<?php while($servico = $servicos->fetch_array(MYSQLI_ASSOC)) { ?> <!-- fetch_array extrai dados de apenas um funcioanrio de todos que estão armazenados na variavel funcionários-->
				<tr>
					<td><?php echo $servico['id']; ?></td>
					<td><?php echo $servico['descricao']; ?></td>
					<td><?php echo number_format($servico['valor'], 2, ',','.'); ?></td>
					<td><?php echo $servico['id_categoria']; ?></td>
					<td><?php echo $servico['id_funcionario']; ?></td>
					<td><?php echo $servico['dt_inicio']; ?></td>
					<td><?php echo $servico['dt_fim']; ?></td>
					<td><?php echo $servico['status']; ?></td>
					<td>
						<a href="novo-servico.php?id=<?php echo $servico['id']; ?>" class="btn btn-warning">
							<i class="fas fa-edit"></i>
						</a>
						<a href="deleta-servico.php?id=<?php echo $servico['id']; ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">
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