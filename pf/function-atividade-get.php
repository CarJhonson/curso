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
		$resultado = 'Tipo passado não é válido! Informe: soma, subtração, divisão, multiplicação';
	}

	return $resultado;
}

$tipo = $_GET['tipo'] ?? 'soma';
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;

echo ucfirst($tipo);
echo '<br>';
echo calculadora($tipo, $num1, $num2);
echo '<br>';
echo '<br>Segunda forma, com if: <br>';
echo calculadoraIf($tipo, $num1, $num2);

?>