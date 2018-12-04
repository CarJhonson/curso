<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Calculadora usando método GET</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1>Calculadora</h1>
	<div class="row">
		<form method="get" action="function-atividade-get.php">
			<div class="form-group">
				<label for="tipo">Tipo:</label>
				<select name="tipo" class="form-control">
					<option value="">.::Escolha a opção::.</option>
					<option value="soma">Soma</option>
					<option value="subtração">Subtração</option>
					<option value="multiplicação">Multiplicação</option>
					<option value="divisão">Divisão</option>
				</select>
			</div>
			<div class="form-group">
				<label for="num1">Número 1:</label>
				<input type="text" name="num1" class="form-control">
			</div>
			<div class="form-group">
				<label for="num2">Número 2:</label>
				<input type="text" name="num2" class="form-control">
			</div>
            <input type="submit" value="Calcular" class="btn btn-primary">

		</form>
	</div>
	
</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>