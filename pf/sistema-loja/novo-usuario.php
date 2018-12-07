<?php 
	include 'layout/header.php';
	include 'layout/menu.php';
	require "includes/conexao.php";

	if(isset($_GET['id']) && $_GET['id'] != '' ){
		$id = $_GET['id'];
		$sql_usuarios = " SELECT * FROM usuario WHERE id = {$id};";
		$usuario = $conexao->query($sql_usuarios);
		$dados_usuario = $usuario->fetch_assoc();
	}

	$sql_usuario = "SELECT * FROM usuario";
	$usuario = $conexao->query($sql_usuario);
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Novo usuario</h1>	
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="usuarios.php">Usuarios</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Novo Usuario</li>
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
	</div>
		<div class="col-3"></div>	
		<div class="col-6">	
			<form method="post" action="salva-usuario.php">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" class="form-control" required value=" <?php echo (isset($dados_usuario) ? $dados_usuario['nome'] : ''); ?>">
					<input type="hidden" name="id" value="<?php echo (isset($dados_usuario) ? $dados_usuario['id'] : ''); ?>">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" class="form-control " required value="<?php echo (isset($dados_usuario) ? $dados_usuario['email'] : '')?>">
				</div>
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary float-right">Salvar</button>								
			</form>
		<div class="col-3"></div>	
		</div>	
</div>

<?php 
	include 'layout/footer.php';
?>