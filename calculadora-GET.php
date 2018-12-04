<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Calculadora usando método GET</title>
</head>
<body>
<div class="container">
	<h1>Calculadora</h1>
	<div class="row">
		<form method="get" action="atividadeGet.ph">
			<div class="form-group">
				<label for="tipo" class="for-control"></label>
				<select>
					<option value="">.::Escolha a opção</option>
					<option value="soma">Soma</option>
					<option value="subtração">Subtração</option>
					<option value="mutiplicação">Multiplicação</option>
					<option value="divisão">Divisão</option>
				</select>
			</div>
			<div class="form-group">
				<label for="num1">Número 1:</label>
				<input type="text" name="num1" class="form-control">
			</div>
			<div class="form-group">
				<label for="num2">Numero 2:</label>
				<input type="text" name="num2" class="form-control">
			</div>
		</form>
	</div>
</div>
</body>
</html>