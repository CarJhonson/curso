<?php 
include "layout/header.php";
include "layout/menu.php";
include "includes/connection.php";

$sql_funcionarios = "SELECT * FROM funcionarios";
$funcionarios = $conexao->query($sql_funcionarios);

?>

<div class="container">
<p>&nbsp;</p>
	<h1>Funcionários</h1> <!-- Início bloco de comando para mostrar os links de acesso as outras paginas "migalhas de pão" -->
	
		<div class="row">
			<div class="col">
				<nav aria-label="breadcrumb">
			  		<ol class="breadcrumb">
			    		<li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Funcionários</li>
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
			<a href="novo-funcionario.php" class="btn btn-primary">
				Novo funcionário
			</a>
		</div>
		<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Cargo</th>
				<th>cpf</th>
				<th>Cargo</th>
				<th>data de nascimento</th>
				<th>telefone</th>
				<th>e-mail</th>
				<th>sexo</th>
				<th>data de admissão</th>				
				<th>ações</th>				
			</tr>
			<!-- linha de loop -->
			<?php while($funcionario = $funcionarios->fetch_array(MYSQLI_ASSOC)) { ?> <!-- fetch_array extrai dados de apenas um funcioanrio de todos que estão armazenados na variavel funcionários-->
				<tr>
					<td><?php echo $funcionario['id']; ?></td>
					<td><?php echo $funcionario['nome']; ?></td>
					<td><?php echo $funcionario['id_cargo']; ?></td>
					<td><?php echo $funcionario['cpf']; ?></td>
					<td><?php echo $funcionario['matricula']; ?></td>
					<td><?php echo $funcionario['dt_nascimento']; ?></td>
					<td><?php echo $funcionario['telefone']; ?></td>
					<td><?php echo $funcionario['email']; ?></td>
					<td><?php echo $funcionario['sexo']; ?></td>
					<td><?php echo $funcionario['dt_admissao']; ?></td>
					<td>
						<a href="novo-funcionario.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-warning">
							<i class="fas fa-edit"></i>
						</a>
						<a href="deleta-funcionario.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">
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