<?php 
include "layout/header.php";
include "layout/menu.php";

require "includes/connection.php";

$title = "Novo usuário";

if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id'];
	$sql_usuario = "SELECT * FROM usuario WHERE id = {$id}";
	$dados_usuario = $conexao->query($sql_usuario)->fetch_assoc();

	$title = "Editar usuário";
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
			    <li class="breadcrumb-item"><a href="usuarios.php">Usuários</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
			  </ol>
			</nav>
		</div>
	</div>

	<div class="row">
		<div class="col-3"></div>		
		<div class="col-6">
			
			<form method="post" action="salvar-usuario.php">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" class="form-control" required  value="<?php echo(isset($dados_usuario) ? $dados_usuario['nome'] : ''); ?>">
					<input type="hidden" name="id" value="<?php echo(isset($dados_usuario) ? $dados_usuario['id'] : ''); ?>">
				</div>
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" name="email" id="email" class="form-control" required  
					value="<?php echo(isset($dados_usuario) ? $dados_usuario['email'] : ''); ?>">
				</div>
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha" class="form-control"
					 <?php echo(isset($dados_usuario) ? '' : 'required') ?> >
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