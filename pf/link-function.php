<?php 
	$tipo = 'subtração';
	$num1 = rand(1, 11);
	$num2 = 654;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Link function - <?php echo $tipo; ?></title>
</head>
<body>
<h2>Link de função passando variável via GET</h2>

<p>
	
	<a href="function-atividade-get.php?tipo=<?php echo $tipo; ?>&num1=<?php echo $num1; ?>&num2=<?php echo $num2; ?>">
		Clique para calcular a "<?php echo $tipo; ?>" de <?php echo $num1; ?> e <?php echo $num2; ?>.
	</a>
</p>
</body>
</html>