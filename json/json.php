<?php

echo "AULA JSON";

echo "<br><br>";

echo "<br>==Exemplo 01 JSON==<br>";
echo "<hr>";

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Alexandre',
	'idade'=>33
));

array_push($pessoas, array(
	'nome'=>'Fernanda',
	'idade'=>25
));

echo json_encode($pessoas);

echo "<br><br>";


echo "<br>==Exemplo 02 JSON==<br>";
echo "<hr>";


$json = '[{"nome":"Alexandre","idade":33},{"nome":"Fernanda","idade":25}]';

$data = json_decode($json, true);

var_dump($data);


?>