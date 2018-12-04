<?php

 function operacao($tipo,$num1,$num2){
 	switch($tipo){
 		case 'soma':
 		return $num1+$num2;
 		//echo "A $tipo é igual a :"$num1+$num2;
 		break;
 		case 'sub':
 		return $num1-$num2;
 		break;
 		case 'mult':
 		return $num1*$num2;
 		break;
 		case 'div':
 		return $num1/$num2;
 		break;
 	}
}
 echo operacao("soma",10,5);
?>