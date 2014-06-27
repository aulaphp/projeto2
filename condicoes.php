<?php
/**
 * @desc Comandos de decisão
 * @author Nataniel Paiva
 * 
 **/

// Vamos conhecer o if e else
$a = 5;

if ( $a > 10 ) {
	echo "a é maior do que 10 <br>";
}else{
	echo "a não é maior do que 10 <br>";
}

if ( $a == 0 ) {
	echo "a é igual a zero <br>";
}elseif ( $a < 10 ){
	echo "a é menor do que 10 <br>";
}else{
	echo "a não é igual a zero e nem menor do que 10 <br>";
}

//Agora esse é o switch case
switch ( $a ){
	case 0:
		echo "a é igual a zero <br>";
	break;
	case 10:
		echo "a é igual a 10 <br>";
	break;
	case 5:
		echo "a é igual a 5 <br>";		
}
