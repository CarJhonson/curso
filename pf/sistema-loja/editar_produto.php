<?php 
include "layout/header.php";
include "layout/menu.php";

require "includes/conexao.php";

$id = $_GET['id'];
$sql_produto = " SELECT * FROM produto WHERE id = {$id}";
$dados = $conexao->query($sql_produto);
$produto = $dados->fetch_assoc();
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Editar Produto</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
			    <li class="breadcrumb-item active" aria-current="editar_categoria.php">Editar Produto</li>
			  </ol>	 
			</nav>
		</div>
	</div>
	<form method="post" action="atualizar-produto.php">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" class="form-control" required value="<?php echo $produto['nome']  ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="valor">Valor: R$</label>
						<input type="text" name="valor" id="valor" class="form-control price" required value="<?php echo $produto['valor']  ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="estoque">Estoque:</label>
						<input type="number" name="estoque" id="estoque" class="form-control" required value="<?php echo $produto['estoque']  ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="id_categoria">Categoria:</label>						
						<select name="id_categoria" class="form-control" required>
							<option value="">Escolha a categoria</option>
							<?php while($mercadoria = $dados->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $mercadoria['id'] ?>"><?php echo $mercadoria['descricao'] ?></option>
							<?php } ?>
						</select>
					</div>
					<button type="submit" class="btn btn-primary float-right">Salvar</button>
				</div>
			</div>
		</form>
</div>

<?php 
include "layout/footer.php";
?>