<?php 
include "layout/header.php";
include "layout/menu.php";

require "includes/connection.php";

$title = "Novo Serviço";

if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id']; 
	$sql_servico = "SELECT * FROM servicos AS s
	LEFT JOIN funcionarios AS f 
	ON s.id_funcionario = f.id WHERE s.id;";
	$dados_servico = $conexao->query($sql_servico)->fetch_assoc();

	$title = "Editar Serviços";
}
?>


<div class="container">
	<p>&nbsp;</p>
	<h1><?php echo $title; ?></h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="servicos.php">Serviços</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
			  </ol>
			</nav>
		</div>
	</div>

	<div class="row">
		<div class="col-3"></div>		
		<div class="col-6">			
			<form method="post" action="salvar-servico.php">
				<div class="form-group">
					<label for="descricao">Descrição:</label>
					<input type="text" name="descricao" id="descricao" class="form-control" required  value="<?php echo(isset($dados_servico) ? $dados_servico['descricao'] : ''); ?>">
					<input type="hidden" name="id" value="<?php echo(isset($dados_servico) ? $dados_servico['id'] : ''); ?>">
				</div>
				<div class="form-group">
					<label for="valor">Valor R$:</label>
					<input type="text" name="valor" id="valor" class="form-control price" required  
					value="<?php echo(isset($dados_servico) ? $dados_servico['valor'] : ''); ?>">
				</div>
				<div class="form-group">
					<label for="id_categoria">Categoria:</label>
					<input type="number" name="id_categoria" id="id_categoria" class="form-control" required  
					value="<?php echo(isset($dados_servico) ? $dados_servico['id_categoria'] : ''); ?>">
				</div>
				<div class="form-group">
					<label for="id_funcionario">Funcionario:</label>
					<select name="id_funcionario" class="form-control" required="">
						<option value="">Escolha um funcionário</option>
						<?php while($dados_servico = $dados_servico->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $dados_servico['id'] ?>"

									<?php 
										if(isset($dados_funcionario) && $dados_funcionario['id_cargo'] == $cargo['id']) { echo 'selected="selected"'; }
									 ?>

									>
									<?php echo $cargo['descricao'] ?>
										
									</option>
							<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="dt_inicio">Data Inicial:</label>
					<input type="date" name="dt_inicio" id="dt_inicio" class="form-control" required  
					value="<?php echo(isset($dados_servico) ? $dados_servico['dt_inicio'] : ''); ?>">
				</div>
				<div class="form-group">
					<label for="dt_fim">Data Final:</label>
					<input type="date" name="dt_fim" id="dt_fim" class="form-control" required  
					value="<?php echo(isset($dados_servico) ? $dados_servico['dt_fim'] : ''); ?>">					
				</div>
				<div class="form-group">
					<label for="status">Status:</label>
					<input type="text" name="status" id="status" class="form-control" required  
					value="<?php echo(isset($dados_servico) ? $dados_servico['status'] : ''); ?>">
				</div>
				<button class="btn btn-primary float-right" type="submit">Salvar</button>
			</form>
		</div>		
		<div class="col-3"></div>		
	</div>

</div>
<?php 
include "layout/footer.php";
?>