<?php
$idade = 78;

if($idade >= 60) {
 	echo 'Poh, idosão';
} else if($idade >= 18) {
 	echo 'A idade nº '.$idade.' é de maior';
} else {
	echo "A idade nº {$idade} é de menor";
}

?>