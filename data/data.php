<?php

echo "AULA DATA E HORA";

echo "<br><br>";

echo "<br>==Exemplo 01 DATA E HORA==<br>";
echo "<hr>";

echo date("d/m/Y H:i:s", 1528313119);

echo "<br>";

echo time();

echo "<br>==Exemplo 02 DATA E HORA==<br>";
echo "<hr>";


//$ts = strtotime("2001-09-11");

$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts);


echo "<br><br>";
echo "<br>==Exemplo 03 DATA E HORA==<br>";
echo "<hr>";

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");

echo ucwords(strftime("%A %B"));

echo "<br><br>";
echo "<br>==Exemplo 04 DATA E HORA==<br>";
echo "<hr>";

$periodo = new DateInterval("P15D");

$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");


?>

