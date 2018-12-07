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
			    		<li class="breadcrumb-item active" aria-current="usuários.php">Usuários</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
		<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])){ ?>
			<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12 esconde">
				<?php echo $_GET['msg']; ?>
			</div>
		<?php }?>
		<a href="novo-usuario.php" class="btn btn-primary mb-2">Novo usuário</a>
	</div>
		<div class="row">
			<table class="table table-bordered table-striped table-hover">
				<thead> 
					<th>Id</th>
					<th>nome</th>
					<th>e-mail</th>
					<th>Ações</th>
				</thead>	

				<?php while($dados = $usuario->fetch_array(MYSQLI_ASSOC)) { //aqui eu starto o loop dos dados da consulta ?>
				<tbody>
				<tr>
					<td><?php echo $dados['id'];  ?>   </td>
					<td><?php echo $dados['nome']; ?>  </td>
					<td><?php echo $dados['email']; ?> </td>					
					<td>
						<a href="deleta-usuario.php?id=<?php echo $dados['id']?>" class="btn btn-danger" title="Excluir" onclick = "return confirm('Deletar?')">
							<i class="far fa-trash-alt"></i>
						</a>
						<a href="novo-usuario.php ?id=<?php echo$dados['id']?>" class="btn btn-warning" title="Editar">
							<i class="fas fa-edit"></i>
						</a>
					</td>
				</tr>
				</tbody>
			<?php } //aqui finalizo o loop dos dados ?>		
			</table>
		</div>
	</div>
<?php include "layout/footer.php"; ?>