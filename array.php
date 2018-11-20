<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$cor = []; // declaração de vetor (não é preciso definir tamanho)
	$cor[] = 'laranjado';
	$cor[] ='verde';
	$cor[] ='preto';
 	$cor[] ='Aquamarine';
 ?>

 list($cor2, $cor0, $cor1, $cor3) =cor; 

 <p><?php var_dump($cor); ?></p>
 <p><?php print_r($cor);  ?> </p>		
 <p><?php echo $cor[0];   ?></p>
 <p><?php echo $cor[3];   ?></p>
 <p><?php echo $cor[2];   ?></p>

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