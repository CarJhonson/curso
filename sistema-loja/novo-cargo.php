<?php 
	include 'layout/header.php';
	include 'layout/menu.php';

	require "includes/connection.php";

	$title = "Novo Cargo";

	if(isset($_GET['id']) && $_GET['id'] != '') {

		$id = $_GET['id'];
		$sql_cargo = "SELECT * FROM cargo WHERE id = {$id};";
		$cargo = $conexao->query($sql_cargo);
		$dados_cargo = $cargo->fetch_assoc();
		$title = "Editar Cargo";
	}

	$sql_cargo = "SELECT * FROM cargo";
	$cargo = $conexao->query($sql_cargo);
	$dados_cargos = $cargo->fetch_assoc();
?>

<div class="container">
	<p>&nbsp;</p>
	<h1><?php echo $title; ?></h1>
	
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="cargos.php">Cargos</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
			  </ol>
			</nav>
		</div>
	</div>

		<form method="post" action="salva-cargo.php">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="descricao">Descrição:</label>
						<input type="text" name="descricao" id="descricao" class="form-control" required
						value="<?php echo (isset($dados_cargo) ? $dados_cargo['descricao'] : ''); ?>">

						<input type="hidden" name="id" value="<?php echo (isset($dados_cargo) ? $dados_cargo['id'] : ''); ?>">
					</div>
					<button type="submit" class="btn btn-primary float-right">Salvar</button>
				</div>
				</div>
			</div>
		</form>

</div>

<?php 
	include 'layout/footer.php';
?>