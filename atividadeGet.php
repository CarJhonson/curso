<?php
$tipo = $_GET['tipo'] ??'';
$num1 = $_GET['num1'] ?? '';
$num2 = $_GET['num2'] ?? '';

echo $tipo;
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
echo calculadora($tipo,$num1,$num2);


?>