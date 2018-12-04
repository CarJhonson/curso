<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php 
			
			$cor = [];

			$cor[2] = 'Laranjado';
			$cor[0] = 'Verde';
			$cor[1] = 'Vermelho';
			$cor[3] = 'Aquamarine';

			list($cor2, $cor0, $cor1, $cor3) = $cor;
		?>
		<p><?php var_dump($cor); ?></p>
		<p><?php print_r($cor); ?></p>
		<p><?php echo $cor['3']; ?></p>
		<p><?php echo $cor2; ?></p>
</body>
</html>