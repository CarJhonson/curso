<?php 
include "layout/header.php";
include "layout/menu.php";

require "includes/connection.php";

$sql_usarios = "SELECT * FROM usuario";
$usuarios = $conexao->query($sql_usarios);

?>

<div class="container">
	<p>&nbsp;</p>
	<h1>Usuários</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Usuários</li>
			  </ol>
			</nav>
		</div>
	</div>

	<div class="row">
		<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])){ ?>
			<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12 esconde">
				<?php echo $_GET['msg']; ?>
			</div>
		<?php } ?>
		<div class="">
			<a href="novo-usuario.php" class="btn btn-primary">
				Novo usuário
			</a>
		</div>
		<p>&nbsp;</p>
		<table class="table table-bordered table-hover table-striped">

			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php while($usuario = $usuarios->fetch_array(MYSQLI_ASSOC)) { ?>
					<tr>
						<td><?php echo $usuario['id']; ?></td>
						<td><?php echo $usuario['nome']; ?></td>
						<td><?php echo $usuario['email'] ?></td>
						<td>
							<a href="novo-usuario.php?id=<?php echo $usuario['id']; ?>" class="btn btn-warning">
								<i class="fas fa-edit"></i>
							</a>
							<a href="exclui-usuario.php?id=<?php echo $usuario['id']; ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php 
include "layout/footer.php";
?>