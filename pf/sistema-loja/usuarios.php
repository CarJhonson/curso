<?php 
include "includes/conexao.php";

include "layout/header.php";
include 'layout/menu.php';
?>
<?php 
$sql_usuarios = "SELECT * FROM usuario;";
$usuario = $conexao->query($sql_usuarios);
?>
	<div class="container">
		<div class="row">
			<div class="col">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    		<li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
			    		<li class="breadcrumb-item"><a href="categorias.php">Categorias</a></li>
			    		<li class="breadcrumb-item active" aria-current="usuários.php">Usuários</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th>Id</th>
					<th>nome</th>
					<th>e-mail</th>
					<th>senha</th>
				</tr>	

				<?php while($dados = $usuario->fetch_array(MYSQLI_ASSOC)) { //aqui eu starto o loop dos dados da consulta ?>
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['senha']; ?></td>
					<td></td>
				</tr>
			<?php } //aqui finalizo o loop dos dados ?>		
			</table>
		</div>
	</div>
<?php include "layout/footer.php"; ?>