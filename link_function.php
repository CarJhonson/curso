<?php 
	$tipo = 'sutração';
	$num1 = rand(1,11);
	$num2 = 653;	
?>

<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>
	<h2>Link de função passando váriável via GET</h2>	
	<a href="atividadeGet.php?tipo=<?php echo $tipo; ?>&num1=<?php echo $num1; ?>&num2=<?php echo $num2?>">
		clique para calcular
	</a>
</body>
</html>