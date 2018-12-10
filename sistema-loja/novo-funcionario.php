<?php 
	include 'layout/header.php';
	include 'layout/menu.php';

	require "includes/connection.php";

	$title = "Novo funcionario";

	if(isset($_GET['id']) && $_GET['id'] != '') {

		$id = $_GET['id'];
		$sql_funcionario = "SELECT * FROM funcionarios WHERE id = {$id};";
		$funcionario = $conexao->query($sql_funcionario);
		$dados_funcionario = $funcionario->fetch_assoc();
		$title = "Editar funcionario";
	}

	$sql_funcionario = "SELECT * FROM funcionarios";
	$funcionario = $conexao->query($sql_funcionario);
	$cargos = $conexao->query("SELECT * FROM cargo");
?>

<div class="container">
	<p>&nbsp;</p>
	<h1><?php echo $title; ?></h1>
	
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="funcionario.php">Funcionários</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
			  </ol>
			</nav>
		</div>
	</div>

		<form method="post" action="salva-funcionario.php">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" class="form-control" required
						value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['nome'] : ''); ?>">

						<input type="hidden" name="id" value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['id'] : ''); ?>">
					</div>
				</div>

				<!--<div class="col-6">
					<div class="form-group">
						<label for="cpf">CPF:</label>
						<input type="number" name="cpf" id="cpf" class="form-control price" required
						value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['cpf'] : '') ?>">
					</div>
				</div>-->
				<div class="col-6">
					<div class="form-group">
						<label for="cpf">CPF:</label>
						<input type="number" name="cpf" id="cpf" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['cpf'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="matricula">Matrícula:</label>
						<input type="number" name="matricula" id="matricula" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['matricula'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="dt_nascimento">Data de Nascimento:</label>
						<input type="date" name="dt_nascimento" id="dt_nascimento" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['dt_nascimento'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="telefone">Telefone:</label>
						<input type="text" name="telefone" id="telefone" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['telefone'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="email">E-mail:</label>
						<input type="text" name="email" id="email" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['email'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="sexo">Sexo:</label>
						<input type="text" name="sexo" id="sexo" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['sexo'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="dt_admissao">Data de admissão:</label>
						<input type="date" name="dt_admissao" id="dt_admissao" class="form-control" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['dt_admissao'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="id_cargo">Cargo:</label>
						
						<select name="id_cargo" class="form-control" required>
							<option value="">Escolha o Cargo</option>
							<?php while($cargo = $cargos->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $cargo['id'] ?>"

									<?php 
										if(isset($dados_funcionario) && $dados_funcionario['id_cargo'] == $cargo['id']) { echo 'selected="selected"'; }
									 ?>

									>
									<?php echo $cargo['descricao'] ?>
										
									</option>
							<?php } ?>

						</select>


					</div>
					<button type="submit" class="btn btn-primary float-right">Salvar</button>
				</div>
			</div>
		</form>

</div>

<?php 
	include 'layout/footer.php';
?>