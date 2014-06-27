<?php
/**
 * @desc Laços de repetição
 * @author Nataniel Paiva
 */

/*Vamos ver primeiro o while*/
 
$a = 6;
echo "<strong>while</strong>";
while ( $a <= 5 ){
	echo "O valor de a é {$a} <br>";
	$a++;
}

/*Agora temos o do while*/
$repetir = 6;
echo "<strong>do while</strong>";
do{
	echo "O valor de repetir é {$repetir} <br>";
   $repetir++; 	
}while($repetir <= 5);


// /*Agora temos o for*/
// echo "<strong>for</strong>";
// for ( $i = 0; $i <= 3; $i++ ){
// 	echo "O valor de i é {$i} <br>";
// }

// /*Agora temos o foreach*/
// $array = ["um", "dois", "três"];
// echo "<strong>foreach</strong>";
// foreach ( $array as $chave => $valor ){
// 	echo "Esse valor {$valor} tem a chave {$chave} <br>";
// }



