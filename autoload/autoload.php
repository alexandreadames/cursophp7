<?php	

echo "AULA POO";

echo "<br><br>";


echo "<br><br>";
echo "<br>==Exemplo 01 AUTOLOAD==<br>";
echo "<hr>";

function __autoload($nomeClasse){

	require_once("$nomeClasse.php");
	require_once("abstratas".DIRECTORY_SEPARATOR."$nomeClasse.php");

}

$carro = new DelRey();

$carro -> acelerar(200);

echo "<br><br>";
echo "<br>==Exemplo 02 AUTOLOAD==<br>";
echo "<hr>";

?>