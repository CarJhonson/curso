<?php 
//FOR normal
for($i = 0; $i <= 10; $i++) {
	#bloco de comandos
	echo 'Boa noite - '.$i.'!<br>';

	if($i == 6) {
		break; //utilizado para quebrar a execução de um comando
	}
}

echo '<br><br>===============************=============<br><br>';

//WHILE imitando o comportamento do FOR
$x = 0;
while($x <= 10) {
	echo 'Boa noite - '.$x.'!<br>';
	$x++;
}

?>