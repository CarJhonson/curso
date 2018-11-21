<?php

function calculadora($tipo,$num1,$num2){
	switch($tipo){
		case 'soma':
		echo "A $tipo entre $num1 e $num2 é igual a  ".($num1+$num2);
		break;
		case 'subtração':
		echo "A $tipo entre $num1 e $num2 é igual a  ".($num1-$num2);
		break;
		case 'multiplicação':
		echo "A $tipo entre $num1 e $num2 é igual a  ".($num1*$num2);
		break;
		case 'divisão':
		echo "A $tipo entre $num1 e $num2 é igual a  ".($num1/$num2);
		break;
		default:
		echo 'Tipo passado não é válido! informe: soma, subtração, multiplicação, divisão';
	}
}
echo calculadora("subtraçã",5,5);

function calculadoraIf($tipo, $num1, $num2){
	if($tipo=='soma'){
		$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 + $num2)."</strong>";
	}else if($tipo=='subtração'){
		$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 - $num2)."</strong>";
	}else if($tipo=='multiplicação'){
		$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 * $num2)."</strong>";
	}else if($tipo=='divisão'){
		$resultado = "A $tipo entre $num1 e $num2 é igual a <strong>".($num1 / $num2)."</strong>";
	}else{
		$resultado='Tipo passado não é válido! informe: soma, subtração, multiplicação, divisão';
	}
	return $resultado;
}

echo '<br>';
echo '<br>';
echo calculadoraIf("diviso",6,6);

?>