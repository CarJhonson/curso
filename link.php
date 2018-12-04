<?php
/*if(isset($_GET['nome'])){  // se variável global nome existe "foi passada no parametro da url"
	$parametro = $_GET['nome']; // então variavel parametro recebe o valor da variavel nome
}else{
	$parametro = ''; // senão parametro recebe vazio
}*/

//ou o codigo a baixo substitui toda a expressão das linha 1 à 6 no php7
$parametro2 = $_GET['sobrenome'] ??	'';
$parametro = $_GET['nome'] ??	'';

echo ucfirst($parametro).' '.strtoupper($parametro2); //função ucfirst coloca a primeira letra em maiúsculo, função strtoupper deixa tudo em maiúsculo
?>