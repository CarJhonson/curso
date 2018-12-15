<!DOCTYPE html>
<html>
<head>
	<title>Extrair do ecxel para o bd</title>
</head>
<body>
	<h1>Extrair excel</h1>
	<div class="container">
		<div class="col" >
			<form method="POST" action="process.php" enctype="multipart/form-data" >
				<div class="form-grup">
					<label>Arquivo </label>
					<input type="file" name="arquivo"><br><br>
					<input type="submit" name="enviar">
				</div>
			</form>
		</div>
	</div>

</body>
</html>