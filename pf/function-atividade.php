<?php 

function calculadora($tipo, $num1, $num2) {
	switch ($tipo) {
		case 'soma':
			$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 + $num2)."</strong>";
			break;
		case 'subtração':
			$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 - $num2)."</strong>";
			break;
		case 'divisão':
			$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 / $num2)."</strong>";
			break;
		case 'multiplicação':
			$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 * $num2)."</strong>";
			break;
		default:
			$resultado = 'Tipo passado não é válido! Informe: soma, subt, div, mult';
			break;
	}

	return $resultado;
}


function calculadoraIf ($tipo, $num1, $num2) {

	if($tipo == 'soma') {
		$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 + $num2)."</strong>";
	} else if($tipo == 'subtração') {
		$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 - $num2)."</strong>";
	} else if($tipo == 'divisão') {
		$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 / $num2)."</strong>";
	} else if($tipo == 'multiplicação') {
		$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 * $num2)."</strong>";
	} else {
		$resultado = 'Tipo passado não é válido! Informe: soma, subt, div, mult';
	}

	return $resultado;
}

echo calculadora('divisão', 6545, 88);
echo '<br>';
echo '<br>';
echo calculadoraIf('multiplicação', 16, 4);

?>