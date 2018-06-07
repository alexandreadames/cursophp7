<?php

echo "AULA FUNCTIONS";

echo "<br><br>";

echo "<br>==Exemplo 01 FUNCTIONS==<br>";
echo "<hr>";

$pessoa = array(
	'nome'=>'Alexandre',
	'idade'=>33
);

//foreach ($pessoa as $p){

	$pessoa['idade'] += 10;
//}

var_dump($pessoa);

echo "<br>==Exemplo 02 FUNCTIONS==<br>";
echo "<hr>";

function soma(int ...$valores){
	
	return array_sum($valores);
	
}

echo "<br>Resultado da Soma ".var_dump(soma(12,13,45));


echo "<br><br>";
echo "<br>==Exemplo 03 FUNCTIONS==<br>";
echo "<hr>";

function soma_s(int ...$valores):string{
	
	return array_sum($valores);
	
}


echo "<br>Resultado da Soma ".var_dump(soma_s(12,13,45));

echo "<br><br>";
echo "<br>==Exemplo 04 FUNCTIONS - RECURSIVA==<br>";
echo "<hr>";

function fatorial($numero){
	if($numero <= 1){
		return $numero;
	}else{
		return $numero * fatorial($numero - 1);
	}
}

//echo fatorial(20);
?>