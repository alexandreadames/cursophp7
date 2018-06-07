<?php

echo "AULA CONSTANTES";

echo "<br><br>";

echo "<br>==Exemplo 01 CONSTANTES==<br>";
echo "<hr>";

define("SERVIDOR","127.0.0.1");

echo SERVIDOR;

echo "<br><br>";


echo "<br>==Exemplo 02 CONSTANTES==<br>";
echo "<hr>";

define("BD",[
	'host' => '127.0.0.1',
	'user' => 'root',
	'passowrd' => 'passwd',
	'bdname' => 'teste'
]);

echo "The hostip is ".BD['host'];

echo "<br><br>";
echo "<br>==Exemplo 03 CONSTANTES==<br>";
echo "<hr>";


echo PHP_VERSION;

echo "<br>";

echo DIRECTORY_SEPARATOR; 

?>