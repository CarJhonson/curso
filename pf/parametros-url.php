<?php 

if(isset($_GET['nome'])) {
	$parametro = $_GET['nome'];
} else {
	$parametro = '';
}

$parametro2 = $_GET['sobrenome'] ?? '';

echo ucfirst($parametro).' '.strtoupper($parametro2);

?>