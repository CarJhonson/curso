<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<?php
list($cor2, $cor0, $cor1, $cor3) =cor; 

 <p><?php var_dump($cor); ?></p>
 <p><?php print_r($cor);  ?> </p>		
 <p><?php echo $cor[0];   ?></p>
 <p><?php echo $cor[3];   ?></p>
 <p><?php echo $cor[2];   ?></p>
   ?>
   
 <?php 
 	class Carro {
 		function acelerar(){
 			echo 'Vrum vrum vrum..';
 		}
 	}

 	$uno = new Carro();
 	$uno ->nome = 'Fiat Uno';

 	$uno->acelerar();

 	echo $uno->nome;
  ?>
</body>
</html>