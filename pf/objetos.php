<?php 
class Carro {
	function acelerar() {
		echo 'Vrum vrum vrum...';
	}
}

	$uno = new Carro();
	$uno->nome = 'Fiat Uno';
	
	$uno->acelerar();

	echo $uno->nome;

	echo '<br>';

	$boolean = true;
	$naoboolean = !$boolean;

	echo $boolean.'<br >'.$naoboolean;
?>
